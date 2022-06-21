<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="admin/styles.css" />
</head>
<body>
<?php
require('../config.php');
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['type']) && isset($_POST['password'])) {
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	//recuperation de l'adresse 
	$adresse = stripslashes($_REQUEST['adresse']);
	$adresse = mysqli_real_escape_string($conn, $adresse);
	// recupérer le telephone 
	$tel = stripslashes($_REQUEST['tel']);
	$tel = mysqli_real_escape_string($conn, $tel);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	// récupérer le type (user | admin)
	$type = stripslashes($_REQUEST['type']);
	$type = mysqli_real_escape_string($conn, $type);
	
    $query = "INSERT into `users` (username, email,adresse,tel, type, password)
				  VALUES ('$username', '$email','$adresse','$tel', '$type', '".hash('sha256', $password)."')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='admin.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add user</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
     <input type="text" class="box-input" name="adresse" placeholder="Adresse" required />
      <input type="text" class="box-input" name="tel" placeholder="Telephone" required />
	<div class="input-group">
			<select class="box-input" name="type" id="type" >
				<option value="" disabled selected>Type</option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
	</div>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
</body>
</html>