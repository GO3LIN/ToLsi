<?php
class Session {

	public function __construct(){
		session_start();
	}

	

	public function deconnexion(){
		$_SESSION = null;
		unset($_SESSION);
	}

}
new Session();
?>