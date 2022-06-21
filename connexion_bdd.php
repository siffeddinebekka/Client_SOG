<?php 
	try{
		$db = new PDO('mysql:host=localhost:8888;dbname=orange', 'root', 'root');
	}catch(\Exception $e){
		die('Erreur : '.$e->getMessage());
	}