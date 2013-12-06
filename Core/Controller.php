<?php
class Controller {

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
	*/
	public function render($view){
		$viewPath = ROOT_DIR.DS.'Views'.DS;

		if(strpos($view, DS)===0)
			$viewPath .= $view.'.php';
		else 
			$viewPath .= get_class($this).DS.$view.'.php';

		if(file_exists($viewPath))
			require_once($viewPath);
		else 
			Dispatcher::E404("Vue $viewPath inexistante");

	}
}
?>