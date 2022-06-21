<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');


if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
// récupérer du mail
  $email = stripslashes($_REQUEST['email']);
  if (preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$#", $_POST['email']));
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer du telephone
  $adresse = stripslashes($_REQUEST['adresse']);
  $adresse = mysqli_real_escape_string($conn, $adresse);
  // récupérer le telephone
  $tel = stripslashes($_REQUEST['tel']);
  $tel = mysqli_real_escape_string($conn, $tel);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  
  $query = "INSERT into `users` (username, email, adresse, tel, type, password)
        VALUES ('$username', '$email','$adresse','$tel', 'user', '".hash('sha256', $password)."')";
  $res = mysqli_query($conn, $query);



    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  
  </h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />

  
  
    <input type="text" class="box-input" name="email" 
  placeholder="Email" pattern="^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$">

    <input type="adresse" id="adresse" name="adresse"  placeholder="adresse" 
      
       required/>

      <input type="tel" id="tel" name="tel" placeholder="Telephone" 
      required
      pattern="(0|\+33)[1-9]( *[0-9]{2}){4}">
              ([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$


  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" 
  pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$" 
  required />
  
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>