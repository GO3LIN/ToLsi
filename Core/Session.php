<?php
class Session {

	public function __construct(){
		session_start();
	}

	

	static function deconnexion(){
		session_destroy();
	}

}
new Session();
?>