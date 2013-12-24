<?php
class User extends Controller{

	public function add(){
		if(count($_POST)>0){



			if(!empty($_POST['username']) && !empty($_POST['password'])) {
				$requete = "CREATE USER ".$_POST['username']." IDENTIFIED BY ".$_POST['password'];
				if(isset($_POST['defaultTablespace']) && !empty($_POST['defaultTablespace']))
					$requete .= " DEFAULT TABLESPACE ".$_POST['defaultTablespace'];
				if(isset($_POST['tempTablespace']) && !empty($_POST['tempTablespace']))
					$requete .= " TEMPORARY TABLESPACE ".$_POST['tempTablespace'];
				if(isset($_POST['profile']) && !empty($_POST['profile']))
					$requete .= " PROFILE ".$_POST['profile'];
				if(isset($_POST['expiredPassword']) && !empty($_POST['expiredPassword']))
					$requete .= " PASSWORD EXPIRE";
				if(isset($_POST['blockedAccount']) && !empty($_POST['blockedAccount']))
					$requete .= " ACCOUNT LOCK";

				unset($_POST['username']);
				unset($_POST['password']);
				unset($_POST['password2']);
				unset($_POST['defaultTablespace']);
				unset($_POST['tempTablespace']);
				unset($_POST['profile']);
				unset($_POST['expiredPassword']);
				unset($_POST['blockedAccount']);

				$nbrQuotas = count($_POST)/2;

				if(isset($_POST['quota0']) && !empty($_POST['quota0'])){
					for($i=0; $i<$nbrQuotas; $i++){
						$quota = $_POST['quota'.$i];
						$quotaOn = $_POST['onTablespace'.$i];
						$requete .= " QUOTA ".$quota." ON ".$quotaOn;
					}
				}
				
				$user = $this->loadModel("User");
				try {
					$res = $user->executeUpdate($requete);
					Session::setFlash("Utilisateur créé avec succès.", "success");
				} catch(PDOException $e){
					Session::setFlash($e->getMessage());
				}

				header("Location: ".ROOT_URL);
			}

		}
	}

}
?>