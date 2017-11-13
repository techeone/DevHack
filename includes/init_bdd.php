<?php
	
	//Connexion a la bdd
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=devhack', 'root', '');
	} catch(Exception $e) {
		echo 'Exception reçue : ',  $e->getMessage(), "\n";
	}


	// bdd: web10925_db
	//user: web10925_db
	//password: bm06oVVidmuIindS

?>