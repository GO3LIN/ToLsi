<?php
class Controller {

	static $vars = array();

	public function __construct(){
		
	}
	
	static function debug($var){
		echo "<pre>";
			print_r($var);
		echo "</pre>";
	}

	/* ###########################
	## Fonction appelant une vue
	## @params: $view => Si commence par DS recherche Le fichier depuis le dossier Views Sinon cherche directement dans le dossier du controller concerné.
	## 
	*/ ###########################

	public function render($view){
		
		//require(ROOT_DIR.DS.'Views'.DS.'Layout'.DS.'header.php');

		$viewPath = ROOT_DIR.DS.'Views'.DS;
		if(strpos($view, DS)===0)
			$viewPath .= $view;
		else 
			$viewPath .= get_class($this).DS.$view.'.php';

		if(file_exists($viewPath)){
			ob_start();
			extract(self::$vars);
			require($viewPath);
			$content_for_layout = ob_get_clean();
			require(ROOT_DIR.DS.'Views'.DS.'Layout'.DS.'default.php');
		}
		else 
			Dispatcher::E404("Vue $viewPath inexistante");


	}

	/* ###########################
	## Fonction vérifiant pour valider une variable lors de l'envoie par formulaire.
	## @params: $var => la variable à traiter
	## @return: false si $var est vide ou n'est pas définie, true sinon.
	*/ ###########################

	public function validate($var){
		if(is_array($var)){
			foreach ($var as $key => $value) {
				if(!isset($var) OR empty($var))
					$this->setFlash(ucfirst($key)." est vide");
			}
		} else {
			if(!isset($var) OR empty($var))
				$this->setFlash(ucfirst($var));
		}
	}

	public function setVar($nom, $var){
		self::$vars[$nom] = $var;
	}

	public function loadModel($modelName){
		$modelPath = ROOT_DIR.DS.'Models'.DS.$modelName.'.php';
		$modelClass = $modelName.'Model';
		if(file_exists($modelPath)){
			require_once($modelPath);
			return new $modelClass();
		}
	}

	public function index(){

	}
}
?>