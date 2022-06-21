<?php 

		require_once("controleur/controleur.sog.php");

		$unControleur = new Controleur();
	?>

	<!DOCTYPE html>
	<html>


	<head>  
		
		<meta charset="utf-8">
		<body background="images/home.jpg">
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestion de l'entrprise SOG</title>
	</head>
	<body>
		<p style="color: purple">
		<center>
			<h1 style="color: beige">Gestion de l'entrprise SOG</h1>
			<div class="dropdown">
				
    <head>
</body>
<body>
  

<img src="images/logo.png" class="logo">
<center> <button class="boutonmenuprincipal"><a href="Admin.php?page=1">Menu Principal</button></center>
 <div class="dropdown-child">
  <br/>
  <button class="boutonmenuprincipal"><a href="Admin.php?page=2">Gestion des clients</a></button>&ensp;
 <button class="boutonmenuprincipal"><a href="Admin.php?page=3">Gestion des Interventions</a></button>&ensp;
 <button class="boutonmenuprincipal"><a href="Admin.php?page=4">Gestion des Techniciens</a></button>&ensp;
  <button class="boutonmenuprincipal"><a href="Admin.php?page=5">Gestion des Users</a></button>&ensp;
  <button class="boutonmenuprincipal"><a href="Admin.php?page=6">Statitiques</a></button>&ensp;
  <button class="boutonmenuprincipal"><a href="Admin.php?page=7">Gestion des Rendez_vous</a></button>&ensp;
 <button class="boutonmenuprincipal"><a href="add_user.php">Espace membre</a></button>&ensp;
    <button class="boutonmenuprincipal"><a href="login.php?">Déconnexion</a></button>&ensp;
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
				case 1 : require_once("homeAdmin.php"); break;
				case 2 : require_once("gestion_client.php"); break;
				case 3 : require_once("gestion_intervention.php"); break;
				case 4 : require_once("gestion_technicien.php"); break;
        		case 5 : require_once("gestion_users.php"); break;
        		case 6 : require_once("gestion_stats.php"); break;
        		case 7 : require_once("gestion_rendez_vous.php"); break;
				case 8 : require_once("produit.php"); break;
				

				default :
					require_once("homeAdmin.php");
					break;
			}
			?>
		</center>
	</a>
</p>
</button>
</body>
	</body>
	</html>