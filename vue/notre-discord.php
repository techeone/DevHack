<?php
session_start();

/*Connexion a la bdd*/
require 'includes/init_bdd.php';

if(isset($_SESSION['pseudo'])) {
/*Recuperation des informations utilisateur*/
require 'includes/infos-utilisateur.php';
} else {

}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Header -->
	<?php require 'includes/header.php';  ?>
</head>
<body>

	<!-- Navbar -->
	<?php require 'includes/navbar.php'; ?>


	<!-- Container -->
	<div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px lightgrey;margin: 20px auto;height: 100%">
		
		<!-- Discord Widget -->

			<h2 class="title-presentation"><?php include 'includes/logo-discord.html' ?>Notre serveur Discord</h2>

			<h4 style="font-family: 'Raleway', sans-serif;">Rejoignez-nous sur notre serveur Discord ! Si vous avez de questions veuillez les poser a moi le chef du serveur ou bien au personnes ayant le role SUDO <b>Hakim Mikado</b> et <b>MisterRobotFr</b> ou bien au modo <b>Anthony "Selenuix"</b></h4>

			<!-- Question (a quoi sert ce serveur) -->
			<h3 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-question-sign"></span> A quoi sert ce serveur ?</h3>

			<h4 style="font-family: 'Raleway', sans-serif;">Ce serveur sert a s'entraider pour du developpement(programmation) , ou bien la securité informatique, mais on fait pas que s'entraider on parle aussi des derniere technologies d'un language pour le developpement par exemple</h4>
			

			<!-- Widget Discord -->
			
			<h3 class="join-server"><span class="glyphicon glyphicon-link"></span> Rejoindre le serveur: </h3>
			
		<div class="widget-discord">
			<iframe src="https://discordapp.com/widget?id=312937153439072256&theme=dark" allowtransparency="true" frameborder="0" style="width: 100%"></iframe>
		</div>

	</div>

	<!-- Fichier jQuery pour le menu -->
	<script src="js/menu.js"></script>

	<?php include 'includes/footer.html'; ?>

</body>
</html>