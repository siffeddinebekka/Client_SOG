<?php 

		require_once("controleur/controleur.sog.php");

		$unControleur = new Controleur();
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestion de l'entreprise SOG</title>
		
	</head>
	<body>
		<center>
			<h1>Gestion de l'entrprise SOG</h1>
			<div class="dropdown">
				
<body>
  


 <button class="boutonmenuprincipal"><a href="User.php">Menu Principal</button>
 <div class="dropdown-child">
  <br/>
  <button class="boutonmenuprincipal"><a href="produit.php">Nos Produits</a></button>&ensp;
   <button class="boutonmenuprincipal"><a href="vue_insert_Rdv.php">Prendre Rendez_vous</a></button>&ensp;
    <button class="boutonmenuprincipal"><a href="login.php">Déconnexion</a></button>&ensp;
    &ensp;
  <br/>

</div>
 </div>
 </div>


			
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 1;
			}
			switch ($page) {
				case 1 : require_once("homeUser.php"); break;
				case 2 : require_once("gestion_client.php"); break;
				case 3 : require_once("gestion_intervention.php"); break;
				case 4 : require_once("gestion_technicien.php"); break;
				case 5 : require_once("gestion_rendez_vous.php"); break;
				case 6 : require_once("produit.php"); break;
				

				default :
					require_once("homeUser.php");
					break;
			}
			?>
		</center>
	
	</body>
	</html>