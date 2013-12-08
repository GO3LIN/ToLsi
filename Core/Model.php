<?php
class Model {


	public function __construct(){
		if(count($_SESSION)>0){
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
				$conn = new PDO("oci:dbname=".$tns,$user,$password);
				return $conn;
			} catch( Exception $e){
				Dispatcher::E404($e->getMessage());
			}
		}
	}


}
?>