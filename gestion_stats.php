
<?php 
	require_once("modele/modele.sog.php");
	require_once("controleur/controleur.sog.php");
	
	if(isset($_GET['action']) && isset($_GET['codeIntervention']))
	{
		if ($_GET['action'] == "sup")
		{
			$unControleur->deleteNbIntervention($_GET['codeIntervention']);
		}
		else if ($_GET['action'] == "edit")
		{
			$lesNbInterventions = $unControleur->selectWhereNbIntervention($_GET['codeIntervention']); 
		}
	}



	if(isset($_POST['Valider']))
	{
		$unControleur->insertNbIntervention($_POST);
		echo'insertion reussite';
	
	}
	$lesNbInterventions = $unControleur->selectAllNbInterventions();
	
	require_once("vue/vue_les_stats.php");

?>

<?php 
	require_once("modele/modele.sog.php");
	
	if(isset($_GET['action']) && isset($_GET['produit']))
	{
		if ($_GET['action'] == "sup")
		{
			$unControleur->deletePanier($_GET['produit']);
		}
		else if ($_GET['action'] == "edit")
		{
			$lesPaniers = $unControleur->selectWherePanier($_GET['produit']); 
		}
	}


	if(isset($_POST['Valider']))
	{
		$unControleur->insertPanier($_POST);
		echo'insertion reussite';
		require_once("vue/vue_insert_NbIntervention.php");
		
	}
	$lesPaniers = $unControleur->selectAllPaniers();
	require_once("vue/vue_les_stats.php");
?>






<?php 
	require_once("modele/modele.sog.php");
	if(isset($_GET['action']) && isset($_GET['code']))
	{
		if ($_GET['action'] == "sup")
		{
			$unControleur->deleteStat($_GET['code']);
		}
		else if ($_GET['action'] == "edit")
		{
			$lesStats = $unControleur->selectWhereStat($_GET['code']); 
		}
	}


	if(isset($_POST['Valider']))
	{
		$unControleur->insertStat($_POST);
		echo'insertion reussite';
		
	}
	$lesStats = $unControleur->selectAllStats();
	require_once("vue/vue_les_stats.php");
?>