<?php
class Profile extends Controller {

	public function __construct(){

	}
	public function add(){
		if(isset($_POST['nom']) && !empty($_POST['nom'])){
			$nom = $_POST['nom'];
			$req = "CREATE PROFILE ".$nom;

			unset($_POST['nom']); // On enlève le nom et on verifie si un champ n'est pas vide
			if(array_filter($_POST)){
				$req .= " LIMIT";
				foreach ($_POST as $k => $v) {
					if(!empty($v)){
						switch ($k) {
							case 'sessPerUser':
								$req .= " SESSIONS_PER_USER ".$v;
								break;
							case 'cpuPerSession':
								$req .= " CPU_PER_SESSION ".$v;
								break;
							case 'cpuPerCall':
								$req .= " CPU_PER_CALL ".$v;
								break;

							case 'connectTime':
								$req .= " CONNECT_TIME ".$v;
								break;
							case 'idleTime':
								$req .= " IDLE_TIME ".$v;
								break;
							case 'lReadsPerSession':
								$req .= " LOGICAL_READS_PER_SESSION ".$v;
								break;
							case 'lReadsPerCall':
								$req .= " LOGICAL_READS_PER_CALL ".$v;
								break;
							case 'compositeLimit':
								$req .= " COMPOSITE_LIMIT ".$v;
								break;
							case 'privateSga':
								$req .= " PRIVATE_SGA ".$v;
								break;
							case 'failedLogin':
								$req .= " FAILED_LOGIN_ATTEMPTS ".$v;
								break;
							case 'pLockTime':
								$req .= " PASSWORD_LOCK_TIME ".$v;
								break;
							case 'pLifeTime':
								$req .= " PASSWORD_LIFE_TIME ".$v;
								break;
							case 'pReuseTime':
								$req .= " PASSWORD_REUSE_TIME ".$v;
								break;
							case 'pReuseMax':
								$req .= " PASSWORD_REUSE_MAX ".$v;
								break;
							case 'pGraceTime':
								$req .= " PASSWORD_GRACE_TIME ".$v;
								break;
							case 'pVerifyFunc':
								$req .= " PASSWORD_VERIFY_FUNCTION ".$v;
								break;
						}
					}
				} // end foreach
			} // end array_filter

			$profileM = $this->loadModel("Profile");
			try {
				$profileM->executeUpdate($req);
				Session::setFlash("Profil créé avec succès", "success");
			} catch(PDOException $e){
				Session::setFlash($e->getMessage()."<br>".$req);
			}

			header("Location: ".ROOT_URL);

		}
	}


	public function delete($profile){
		if(!empty($profile)){
			$req = "DROP PROFILE ".$profile." CASCADE";
			$profileM = $this->loadModel("Profile");
			try {
				$profileM->executeUpdate($req);
				Session::setFlash("Profil suprimé avec succès", "success");
			} catch(PDOException $e){
				Session::setFlash($e->getMessage());
			}

			header("Location: ".ROOT_URL);
		}
	}

	public function fillFields(){
		header('Content-type: application/json');

		if(isset($_POST['profile']) AND !empty($_POST['profile'])){
			$profile = $_POST['profile'];
			$json = array();
			$json['NOM'] = $profile;

			$req = "SELECT 	RESOURCE_NAME, LIMIT FROM dba_profiles WHERE profile='".$profile."'";

			$params = array();
			$params['fields'] = array("RESOURCE_NAME", "LIMIT");
			$params['where'] = array("profile" => $profile);
			$params['order'] = "RESOURCE_NAME";

			$profileM = $this->loadModel("Profile");
			$profileInfo = $profileM->find($params, PDO::FETCH_ASSOC);

			$json = array_merge($json, $profileInfo);




			echo json_encode($json);
		}

	}

}
?>