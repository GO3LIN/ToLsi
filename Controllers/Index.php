<?php
class Index extends Controller{

	public function __construct(){
		
	}

	public function index(){
		$this->render("Login");
	}



	public function login(){
		$session = new Session();
		$_SESSION = $_POST;
		new Model();
	}

}
?>