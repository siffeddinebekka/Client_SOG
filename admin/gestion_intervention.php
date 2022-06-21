<?php 
	
	if(isset($_GET['action']) && isset($_GET['codei']))
	{
		if($_GET['action'] == "sup")
		{
			$unControleur->deleteIntervention($_GET['codei']);
		}
	}
	require_once("vue/vue_insert_intervention.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertIntervention($_POST);
		echo'insertion reussite';
	}
	$lesInterventions = $unControleur->selectAllIntervention();
	require_once("vue/vue_les_interventions.php");
?>