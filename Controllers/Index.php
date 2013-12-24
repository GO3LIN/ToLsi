<?php
class Index extends Controller{

	public function __construct(){
		
	}

	public function index(){
		if(count($_SESSION)>0){
			$user = $this->loadModel("User");
			$users = $user->findAll();
			$this->setVar("users", $users);
			$this->render("Logged");
		}
		else
			$this->render("Login");
	}



	public function login(){
		$_SESSION = $_POST;
		$model = new Model();
		if($model->connected){
			//$this->redirect("Index");
			header("Location: ".ROOT_URL);
		} else 
		$this->render('Login');


	}

}
?>