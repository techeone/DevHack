<?php


	/*Recuperation de des informations utilisateur*/
	require 'includes/infos-utilisateur.php';

	if(isset($_POST['formupdate'])) {


	/*Modification pseudo*/
	if(!empty($_POST['newpseudo']) AND isset($_POST['newpseudo']) AND $_POST['newpseudo'] != $userinfos['pseudo']) {

		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$req_newpseudo = $bdd->prepare('UPDATE membres SET pseudo = ? WHERE id = ?');
		$req_newpseudo->execute(array($newpseudo, $userinfos['id']));
		header('Location: ../user/'. $userinfos['pseudo']);

	} else {
		$msg = 'Le pseudo entré existe deja';
	}



	/*Modification email*/
	if(!empty($_POST['newmail']) AND isset($_POST['newmail']) AND $_POST['newmail'] != $userinfos['mail']) {

		$newmail = htmlspecialchars($_POST['newmail']);
		$req_newmail = $bdd->prepare('UPDATE membres SET mail = ? WHERE id = ?');
		$req_newmail->execute(array($newmail, $userinfos['id']));
		header('Location: ../user/'. $userinfos['pseudo']);

	} else {
		$msg = 'L\'adresse mail entré existe deja';
	}



	/*Modification du mot de passe*/
	if(!empty($_POST['newmdp']) AND isset($_POST['newmdp']) AND $_POST['newmdp'] != $userinfos['motdepasse']) {

		$newmdp = sha1($_POST['newmdp']);
		$req_newmdp = $bdd->prepare('UPDATE membres SET motdepasse = ? WHERE id = ?');
		$req_newmdp->execute(array($newmdp, $userinfos['id']));
		header('Location: ../user/'. $userinfos['pseudo']);

	} else {
		$msg = 'Le mot de passe entré existe deja';
	}



}





?>