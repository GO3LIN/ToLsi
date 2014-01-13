<?php
class UserModel extends Model{
	public $table = "ALL_USERS";

	public function __construct(){
		parent::__construct();
	}

	public function deleteUser($username){
		if(empty($username))
			return false;
		$query = "DROP USER ".$username;
		try {
			self::$pdo->query($query);
			return true;
		} catch(PDOException $e){
			Session::setFlash($e->getMessage());
		}
	}

	public function last($n = 20){
		$params['where'] = 'rownum < '.$n;
		$params['order'] = 'CREATED DESC';
		return $this->find($params);
	}


}
?>