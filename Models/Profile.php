<?php
class ProfileModel extends Model {

	public $table = "dba_profiles";
	
	public function __construct(){

	}

	public function findListe(){
		$p = array();
		$p['fields'] = 'PROFILE';
		$p['group'] = 'PROFILE';

		return $this->find($p);
	}
}
?>