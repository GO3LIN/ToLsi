<?php
class Profile extends Controller {

	public function __construct(){

	}
	public function add(){
		if(isset($_POST['nom']) && !empty($_POST['nom'])){
			$nom = $_POST['nom'];
			$req = "CREATE OR REPLACE PROFILE ".$nom;

			unset($_POST['nom']); // On enlève le nom et on verifie si un champ n'est pas vide
			if(array_filter($_POST))
				$req .= " LIMIT ";

			print_r($_POST);
			echo $req;
		}
	}

}
?>