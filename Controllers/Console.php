<?php
class Console extends Controller {

	public function __construct(){

	}

	public function execute(){
		$model = new Model();
		$ret = $model->execute($_POST['query']);

		$attributs = get_object_vars($ret[0]);
		
		echo '<table><tr>';
		foreach($attributs as $k=>$v){
			echo '<th>'.$k.'</th>';
		}
		echo '</tr>';

		foreach($ret as $r){
			echo '<tr>';
			foreach($attributs as $k=>$v){
				echo '<td>'.$r->$k.'</td>';
			}
			echo '</tr>';
		}

		echo '</table>';

	}

}
?>