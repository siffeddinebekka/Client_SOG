<?php
// Informations d'identification
define('DB_SERVER', 'localhost:8888');
define('DB_USERNAME', 'Admin');
define('DB_PASSWORD', 'Admin123');
define('DB_NAME', 'orange');
 
// Connexion ? la base de donn?es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V?rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>