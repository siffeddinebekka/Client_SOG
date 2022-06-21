<?php 
require_once("modele/modele.sog.php");
	$unClient = null;
	if(isset($_GET['action']) && isset($_GET['codec']))
	{
		if ($_GET['action'] == "sup")
		{
			$unControleur->deleteClient($_GET['codec']);
		}
		else if ($_GET['action'] == "edit")
		{
			$unClient = $unControleur->selectWhereClient($_GET['codec']); 
		}
	}

	require_once("vue/vue_insert_client.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertClient($_POST);
		echo'insertion reussite';
		
	}
	$lesClients = $unControleur->selectAllClients();
	require_once("vue/vue_les_clients.php");
?>

