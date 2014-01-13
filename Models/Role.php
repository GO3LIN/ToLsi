<?php
class RoleModel extends Model {
	public $table = "DBA_ROLES";

	public function __construct(){
		parent::__construct();
	}

	public function last($n = 20){
		$params['where'] = 'rownum < '.$n;
		return $this->find($params);
	}



}
?>