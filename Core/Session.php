<?php
class Session {

	public function __construct(){
		session_start();
	}

	

	public function __destruct(){
		$_SESSION = null;
		unset($_SESSION);
	}

}
?>