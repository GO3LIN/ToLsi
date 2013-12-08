<?php
class Console extends Controller {

	public function __construct(){

	}

	public function execute(){
		$model = new Model();
		if($model->connected) echo "Connecte";
		else die("Error");
		$ret = $model->execute($_POST['query']);

		foreach($ret as $r){
			print_r($r);
		}
	}

}
?>