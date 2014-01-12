<?php
class Role extends Controller{

	public function __construct(){

	}

	public function add(){
		if(isset($_POST['nom']) && !empty($_POST['nom'])){
			$nom = $_POST['nom'];
			$req = "CREATE ROLE ".$nom;
			if(isset($_POST['identifiedRole']) && !empty($_POST['identifiedRole'])){
				if(isset($_POST['password']) && !empty($_POST['password'])){
					if(isset($_POST['password2']) && !empty($_POST['password2'])){
						if($_POST['password']==$_POST['password2'])
							$req .= " IDENTIFIED BY ".$_POST['password'];
					}
				}
			} elseif(isset($_POST['usingRole']) && !empty($_POST['usingRole'])){
				if(isset($_POST['schema']) && !empty($_POST['schema'])){
					if(isset($_POST['package']) && !empty($_POST['package']))
						$req .= " IDENTIFIED USING ".$_POST['schema'].".".$_POST['package'];
				}
			} elseif(isset($_POST['externallyRole']) && !empty($_POST['externallyRole']))
				$req .= " IDENTIFIED EXTERNALLY";
			elseif(isset($_POST['globallyRole']) && !empty($_POST['globallyRole']))
				$req .= " IDENTIFIED GLOBALLY";
			else
				$req .= " NOT IDENTIFIED";

			$roleM = $this->loadModel("Role");
			try {
				$res = $roleM->executeUpdate($req);
				Session::setFlash("Role créé avec succès.", "success");
			} catch(PDOException $e){
				Session::setFlash($e->getMessage());
			}

			header("Location: ".ROOT_URL);

		}	
	}

	public function delete($role){
		if(isset($role) AND !empty($role)){
			$req = "DROP ROLE ".$role;
			$roleM = $this->loadModel("Role");
			try {
				$roleM->executeUpdate($req);
				Session::setFlash("Role supprimé avec succès", "success");
			} catch(PDOException $e){
				Session::setFlash($e->getMessage());
			}
			header("Location: ".ROOT_URL);
		}
	}


}
?>