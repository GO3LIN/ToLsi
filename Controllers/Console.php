<?php
class Console extends Controller {

	public function __construct(){

	}

	public function execute(){
		$model = new Model();
		$ret = $model->execute($_POST['query']);
		if($ret){
			$attributs = get_object_vars($ret[0]);
			
			$data = '<table class="table table-condensed table-hover"><thead>';
			foreach($attributs as $k=>$v){
				$data .= '<th>'.$k.'</th>';
			}
			$data.= '</thead><tbody>';

			foreach($ret as $r){
				$data .= '<tr>';
				foreach($attributs as $k=>$v){
					$data.= '<td>'.$r->$k.'</td>';
				}
				$data.= '</tr>';
			}

			$data.= '</tbody></table>';

			$this->setVar("console", $data);

			$this->render('Tableau');
		} else 
			header("Location :".ROOT_URL);
	}

}
?>