<?php 
	
	if(isset($_GET['action']) && isset($_GET['codet']))
	{
		if($_GET['action'] == "sup")
		{
			$unControleur->deleteTechnicien($_GET['codet']);
		}
	}
	require_once("vue/vue_insert_technicien.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertTechnicien($_POST);
		echo'insertion reussite';
	}
	$lesTechniciens = $unControleur->selectAllTechniciens();
	require_once("vue/vue_les_techniciens.php");
?>
