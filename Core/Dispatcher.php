<?php
class Dispatcher {


	private $defaultController = 'index';
	private $defaultAction = 'index';
	public $controller, $action, $params;

	// ###########################
	// Constructeur:
	// Initialise les attributs controller action et params et les appelle
	// ###########################

	public function __construct(){

		$url = substr($_SERVER['REQUEST_URI'], strlen(ROOT_URL)); // On enlève la premiere partie de l'url http://localhost/mySite
		
		$request = explode('/', trim($url,'/'));
		$this->controller = (!current($request)) ? $this->defaultController : array_shift($request);
		$this->action = (!current($request)) ? $this->defaultAction : array_shift($request);
		$this->params = (!current($request)) ? array() : $request;

		$this->callController();
	}

	public function callController(){
		// Usage : /ROOT_DIR/Controllers/Name.php
		$controller = ucfirst($this->controller);
		$controllerFile = ROOT_DIR.DS.'Controllers'.DS.$controller.'.php';
		
		if(!file_exists($controllerFile))
			self::E404("Controller '$controllerFile' inexistant !");
		
		require($controllerFile);
		$c = new $controller();

		if(!method_exists($c, $this->action))
			self::E404("Action '$this->action' inexistante !");
		
		call_user_func_array(array($c, $this->action), $this->params);

	} 

	public static function E404($msg){
		echo '<h1>Erreur 404</h1>';
		
		if(Config::$debug){
			if(is_array($msg)){
				echo "<pre>";
				print_r($msg);
				echo "</pre>";
			} else
				echo $msg;
		}
		die();

	}
}
?>