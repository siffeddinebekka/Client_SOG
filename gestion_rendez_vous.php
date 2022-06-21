<?php 
	
	
	require_once("vue/vue_insert_Rdv.php");
	if(isset($_POST['Valider']))
	{
		$unControleur->insertRendez_vous($_POST);
		echo'insertion reussite';
	}
	$lesRendezvous = $unControleur->selectAllRdvs();
	require_once("vue/vue_les_Rdv.php");
?>
