<?php
class Index extends Controller{

	public function __construct(){
		
	}

	public function index(){
		if(count($_SESSION)>0){
			// Derniers 10 utilisateurs
			$user = $this->loadModel("User");
			$users = $user->last(10);
			$this->setVar("users", $users);

			// Derniers 10 roles
			$role = $this->loadModel("Role");
			$roles = $role->findAll();
			$this->setVar("roles", $roles);

			 
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

	public function logout(){
		//header("Content-type: application/json");
		session_destroy();
		unset($_SESSION);
		unset($_POST);
		//echo "{success: 'success'}";
	}

}
?>