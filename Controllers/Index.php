<?php
class Index extends Controller{

	public function __construct(){
		
	}

	public function index(){
		if(count($_SESSION)>0){
			// Derniers 10 utilisateurs
			$userM = $this->loadModel("User");
			$users = $userM->last(10);
			$this->setVar("users", $users);

			// Liste des roles
			$roleM = $this->loadModel("Role");
			$roles = $roleM->findAll();
			$this->setVar("roles", $roles);

			// Liste des profils
			$profileM = $this->loadModel("Profile");
			$profiles = $profileM->findListe();
			$this->setVar("profiles", $profiles);

			 
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