<?php 
	require_once("connexion_bdd.php");

	if(!empty($_GET['u']) && !empty($_GET['token']) ){
		$u = htmlspecialchars(base64_decode($_GET['u']));
		$token = htmlspecialchars(base64_decode($_GET['token']));

		$check = $bdd->prepare('SELECT * from password_recover where token_user = ? and token = ?');
		$check->execute(array($u, $token));
		$row = $check->rowCount();
		$data = $check->fetch();

		if($row){
			$get = $bdd->prepare('SELECT token from users where token = ?');
			$get->execute(array($u));
			$data_u = $get->fetch();


			if(hash_equals($data_u['token'], $u)){
				header('location: password_change.php?u='.base64_encode($u));
				die();
			}else{
				echo"Erreur : tokken non valide ";
			}
		}else{
			echo "Erreur : Compte inexistant";
		}
	}else{
		echo "lien non valide";
	}