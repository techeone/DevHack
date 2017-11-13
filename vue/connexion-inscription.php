<?php
session_start();

	/*Connexion a la bdd*/
	require 'includes/init_bdd.php';

	/*Traitement pour l'inscription*/
	require 'includes/inscription.php';

	if(isset($_SESSION['pseudo'])) {
	/*Recuperation des informations utilisateur*/
	require 'includes/infos-utilisateur.php';
	} else {

	}	

	//Traitement pour la conneion
	require 'includes/connexion.php';

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


	<!-- Container -->
	<div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px lightgrey;margin: 20px auto;height: 100%">

	<h2 style="font-family: 'Raleway', sans-serif;text-align: center;">Connexion et Inscription</h2>

	<p style="font-family: 'PT Sans', sans-serif;text-align: center;">Dans cette page vous avez le choix entre vous connecter si vous avez un compte sinon vous inscrire</p>
		
	<!-- Formulaire de connexion -->
	<div class="form-group">

			<h2 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-log-in"></span> Se connecter</h2>
			
			<form method="post" action="" id="form-input">
	
				<!-- Pseudo -->
				<label>Pseudo:</label>
				<div class="input-group">

					<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>

					<input type="text" name="pseudo_connect" placeholder="Entrez votre pseudo..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2">
				</div>
					
					<!-- Mot de passe -->
					<label>Mot de passe:</label>
					<div class="input-group">

						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>

						<input type="password" name="mdp_connect" placeholder="Entrez votre mot de passe..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2"><br>
					</div>

					<br>
						
						<input type="submit" name="formconnexion" value="Se connecter" class="btn btn-primary">

					<p style="font-family: 'PT Sans', sans-serif;color: red;">
						<?php if(isset($message)) {echo $message;} ?>
					</p>
					

			</form>



	</div>

	<br>

	<!-- Formulaire d'inscription -->
	<div class="form-group">

			<h2 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-user"></span> S'inscrire</h2>
			
			<form method="post" action="">

					<!-- Pseudo -->
					<label>Pseudo:</label>
					<div class="input-group">

						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="pseudo" placeholder="Entrez un pseudo..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2">

					</div>

					<!-- Mail -->
					<label>Mail:</label>
					<div class="input-group">

						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
						<input type="email" name="mail" placeholder="Entrez une adresse mail..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2">

					</div>
					
					<!-- Mot de passe -->
					<label>Mot de passe:</label>
					<div class="input-group">

						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="mdp" placeholder="Entrez un mot de passe..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2">

					</div>

					<label>Confirmation du mot de passe:</label>
					<div class="input-group">
						
						<span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="mdp2" placeholder="Confirmer votre mot de passe..." class="form-control" style="width: 100%" ariadescribedby="sizing-addon2">

					</div>
					<br>
					
					<input type="submit" name="forminscription" value="S'inscrire" class="btn btn-primary">

			</form>

			<p style="font-family: 'PT Sans', sans-serif;color: red;">
				<?php if(isset($msg)) {echo $msg;} ?>
			</p>



	</div>


	</div>

	<?php include 'includes/footer.html' ?>

	<!-- Fichier jQuery -->
	<script src="js/menu.js"></script>
	<script src="js/recherche.js"></script>

</body>
</html>