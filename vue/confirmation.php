<?php

	/*Connexion a la bdd*/
	require 'includes/init_bdd.php';

	if(isset($_GET['pseudo'], $_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])) {

		$pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
		$key = htmlspecialchars($_GET['key']);

		$requser = $bdd->prepare('SELECT * FROM membres WHERE pseudo = ? AND confirmekey = ?');
		$requser->execute(array($pseudo, $key));	
		$userexist = $requser->rowCount();

		if ($userexist == 1) {
			
			$user = $requser->fetch();

			if($user['mail_confirmation'] == null) {

				$update_user = $bdd->prepare('UPDATE membres SET mail_confirmation = 1 WHERE pseudo = ? AND confirmekey = ?');
				$update_user->execute(array($pseudo, $key));

				$msg = 'Votre compte a bien été confirmé';
				$success = 'Vous pouvez désormais vous connecter';

			} else {
				$msg = 'Votre compte a deja été confirmé';
			}

		} else {

			$msg = "Cet utilisateur n'existe pas";

		}

	}





?>
<!DOCTYPE html>
<html>
<head>
	<!-- Header -->
	<?php require 'includes/header.php' ?>
</head>
<body>

	<!-- Navbar -->
	<?php require 'includes/navbar.php' ?>

	<!-- Barre de recherche -->
	<?php require 'includes/search-bar.php' ?>

	<div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px lightgrey;margin: 20px auto;height: 100%">
		
		<h1 style="text-align: center;font-family: 'Raleway', sans-serif;"><?php if(isset($msg)) {echo $msg;} ?></h1>
		<h4 style="font-family: 'PT Sans', sans-serif;text-align: center;"><?php if(isset($success)) {echo $success;} ?></h4>

		<br>
		<br>

		<div align="center">
			<img src="https://i.imgur.com/Ak6ZSbE.gif" class="img-responsive">
		</div>

		<br>
		<br>
		<br>
		<br>

	</div>

	<?php include 'includes/footer.html' ?>

	<!-- Fichiers jQuery -->
	<script src="js/menu.js"></script>
	<script src="js/recherche.js"></script>


</body>
</html>