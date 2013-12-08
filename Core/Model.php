<?php
class Model {

	public $connected = false;
	static $pdo;

	/* ############################# 
	## Constructeur : Créé une instance oracle à partir des variables de sessions
	## @return: retourne l'instance oracle ou false si un probleme survient.
	*/ #############################

	public function __construct(){
		if(count($_SESSION)>0){
			echo 'Connexion à la BDD';
			extract($_SESSION);
			try {
				$tns = " 
				(DESCRIPTION =
				    (ADDRESS_LIST =
				      (ADDRESS = (PROTOCOL = TCP)(HOST = ".$host.")(PORT = ".$port."))
				    )
				    (CONNECT_DATA =
				      (SERVICE_NAME = ".$sid.")
				    )
				  )
		       ";
				$pdo = new PDO("oci:dbname=".$tns,$user,$password);
				self::$pdo = $pdo;
				$this->connected = true;
			} catch(Exception $e){
				$e->getMessage();
			}
			
		}
	}

	public function execute($query){

		$res = self::$pdo->query($query);
		$ret = $res->fetchAll(PDO::FETCH_OBJ);
		return $ret;
	}


}
?>