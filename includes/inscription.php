<?php

/*Traitement pour l'inscription*/
	if(isset($_POST['forminscription'])) {

	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);

	if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {

		$pseudo_length = strlen($pseudo);

		if ($pseudo_length < 255) {

			$pseudo_req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
			$pseudo_req->execute(array($pseudo));
			$pseudo_exist = $pseudo_req->rowCount();

			if($pseudo_exist == 0) {
			
			if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				
				$mail_req = $bdd->prepare('SELECT mail FROM membres WHERE mail = ?');
				$mail_req->execute(array($mail));
				$mail_exist = $mail_req->rowCount();

				if ($mail_exist == 0) {
					
					if ($mdp == $mdp2) {

						$longueurKey = 15;
						$key = "";

						for($i = 1; $i < $longueurKey; $i++) {
							$key .= mt_rand(0, 9);

						}
						
						$req_insert = $bdd->prepare('INSERT INTO membres(pseudo, mail, motdepasse, confirmekey) VALUES(?, ?, ?, ?)');
						$req_insert->execute(array($pseudo, $mail, $mdp, $key));

						require 'includes/send_mail.php';

						$msg = 'Le compte a été crée, veuillez verifier dans votre boite mail, le message pour confirmer votre compte';

					} else {
						$msg = 'Vos deux mot de passes ne correspondent pas';
					}

				} else {
					$msg = 'Cet adresse mail existe deja';
				}

			}
		} else {
			$msg = 'Votre pseudo est deja pris';
		}

		} else {
			$msg = 'Votre pseudo ne doit pas dépasser 255 caractères';
		}
		
	} else {
		$msg = 'Veuillez remplir tous les champs';
	}


	}



?>