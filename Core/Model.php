<?php
class Model {

	public $connected = false;
	public $errorMsg;
	public $table;
	static $pdo;

	/* ############################# 
	## Constructeur : Créé une instance oracle à partir des variables de sessions
	## @return: retourne l'instance oracle ou false si un probleme survient.
	*/ #############################

	public function __construct(){
		if(count($_SESSION)>0){
			//echo 'Connexion à la BDD';
			if(isset($_SESSION['host']) && isset($_SESSION['port']) && isset($_SESSION['sid']) && isset($_SESSION['user']) && isset($_SESSION['password'])){
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
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$pdo = $pdo;
					$this->connected = true;
				} catch(PDOException $e){
					Session::setFlash($e->getMessage());
				}
			}
			else {
				Session::deconnexion();
				header("Location: ".ROOT_URL);
			}
			
		}
	}

	public function find($params, $fetch = PDO::FETCH_OBJ){
		if(!$params)
			return $this->findAll();

		$req = "SELECT ";

		//$params ['fields'] = array("f1", "f2", "f3"); OR $params['fields'] = 'f1';
		//$params ['where'] = array("key" => "value"); OR $params['where'] = 'id>70';
		if(!isset($params['fields']))
			$params['fields'] = "*";

		if(is_array($params['fields']))
			$req .= implode(", ", $params['fields']);
		else
			$req .= $params['fields'];

		$req .= " FROM ".$this->table;

		if(isset($params['where'])){
			$req .= " WHERE ";

			if(is_array($params['where'])){
				$where = array();
				foreach ($params['where'] as $field => $val) {
					$whereString = $field."=";
					$whereString .= is_numeric($val) ? $val : "'".$val."'";
					$where[] = $whereString;
				}
				$req .= implode(" AND ", $where);
			} else {
				$req .= $params['where'];
			}
		}

		if(isset($params['order']))
			$req .= " ORDER BY ".$params['order']; 
		if(isset($params['group']))
			$req .= " GROUP BY ".$params['group'];

		//die($req);
		

		$res = self::$pdo->query($req);
		return $res->fetchAll($fetch);

	}

	public function findAll(){
		$query = "SELECT * FROM ".$this->table;
		$res = self::$pdo->query($query);
		return $res->fetchAll(PDO::FETCH_OBJ);
	}

	public function execute($query){
		try {
			$res = self::$pdo->query($query);
			$ret = $res->fetchAll(PDO::FETCH_OBJ);
			return $ret;
		} catch(PDOException $e){
			Session::setFlash($e->getMessage());
			header("Location: ".ROOT_URL);
		}
		return false;
	}

	public function executeUpdate($requete){
		return self::$pdo->query($requete);
	}

	public function setTable($t){
		$this->table = $t;
	}


}
?>