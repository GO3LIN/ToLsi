<?php
class Index extends Controller{

	public function __construct(){
		
	}

	public function index(){
		$this->render("Login");
	}



	public function login(){
		$_SESSION = $_POST;
		$model = new Model();
		if($model->connected){
			$this->render('Logged');
		} else 
		$this->render('Login');


	}

}
?>