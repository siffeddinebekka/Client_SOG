<?php 
	$lesUsers = null;
	if(isset($_GET['action']) && isset($_GET['id']))
	{
		if ($_GET['action'] == "sup")
		{
			$unControleur->deleteUsers($_GET['id']);
		}
		else if ($_GET['action'] == "edit")
		{
			$lesUsers = $unControleur->selectWhereUsers($_GET['id']); 
		}
	}


	if(isset($_POST['Valider']))
	{
		$unControleur->insertusers($_POST);
		echo'insertion reussite';
		
	}
	$lesUsers = $unControleur->selectAllUsers();
	require_once("vue/vue_les_Users.php");
?>

