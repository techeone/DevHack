<?php

	require 'includes/init_bdd.php';

	if(isset($_POST['formconnexion'])) {

	$pseudo_connect = htmlspecialchars($_POST['pseudo_connect']);
	$mdp_connect = sha1($_POST['mdp_connect']);

	if (!empty($_POST['pseudo_connect']) AND !empty($_POST['mdp_connect'])) {
		
		$req_info = $bdd->prepare('SELECT * FROM membres WHERE pseudo = ? AND motdepasse = ?');
		$req_info->execute(array($pseudo_connect, $mdp_connect));
		$user_exist = $req_info->rowCount();

		if ($user_exist == 1) {

			$userinfo = $req_info->fetch();

			if($userinfo['mail_confirmation'] == 1) {

			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];
			$_SESSION['mail'] = $userinfo['mail'];

			header('Location: accueil');

		} else {
			$message = 'Vous devez d\'abord confirmer votre compte';
		}

		} else {
			$message = 'Le pseudo ou mot de passe sont incorrects';
		}

	} else {

		$message = 'Veuillez remplir tous les champs';
	}


}




?>