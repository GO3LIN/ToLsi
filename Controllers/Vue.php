<?php
class Vue extends Controller {

	public function __construct(){

	}
	public function add(){
		if(isset($_POST['nom']) && !empty($_POST['nom'])){
			if(isset($_POST['request']) && !empty($_POST['request'])){
				$req = "CREATE VIEW ".$_POST['nom']." AS ".$_POST['request'];
				$vueM = $this->loadModel("Vue");
				try{
					$vueM->executeUpdate($req);
					Session::setFlash("Vue créée avec succès", "success");
				} catch(PDOException $e){
					Session::setFlash($e->getMessage());
				}
				header("Location: ".ROOT_URL);
			}
		}
	}

	public function liste(){
		
	}

}
?>