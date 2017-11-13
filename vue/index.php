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
	<?php require 'includes/header.php' ?>
</head>
<body>

		<?php require 'includes/navbar.php'  ?>

		<!-- <div class="infos-marquee"><p style="font-weight: bold;">Merci beaucoup, on est plus de 20 membres dans le serveur Discord :)  | Merci a au SUDO(Hakim Midako et MisterRobotFr) de m'avoir aidé pour gérer le serveur</span>, allez tous jeter un coup d'oeil sur le github de MisterRobotFr</span><a href="https://github.com/MisterRobotFr" target="_blank">- Cliquer sur le GitHub de MisterRobotFr -</a></p></div> -->
	</nav>

	<!-- Barre de recherche -->
	<?php require 'includes/search-bar.php' ?>

	<div style="margin: 15px auto;" class="carousel-accueil">

		
		<div class="carousel-caption content-text-cl">
			<h1 class="title-cl1" id="txt-cl1">On est plus de 40 membres, merci !</h1>
			<p class="p-cl1" id="p-cl1">Le serveur a atteint plus de 40 membres, si vous voulez rejoindre le discord, cliquez sur l'image</p>
		</div>
		
		<!-- Images carousel 1 -->
		<a href="notre-discord"><img src="images/img-slide1.png" style="width: 100%;" class="center-block img-responsive" id="img-carousel1"></a>

		<!-- Image carousel 2 -->
		<a href="nouveautes"><img src="images/img-slide2.png" style="width: 100%;display: none;border: 1px solid black" class="center-block img-responsive" id="img-carousel2"></a>

		<!-- Image carousel 3 -->
		<a href="https://github.com/MisterRobotFr"><img src="images/img-slide3.png" style="width: 100%;display: none;" class="center-block img-responsive" id="img-carousel3"></a>

		
		<h1 class="carousel-images"><span id="cl1" class="color-cl">.</span><span id="cl2">.</span><span id="cl3">.</span></h1>

		</div>

		<br>


	<!-- Container -->
	<div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px lightgrey;margin: 20px auto;height: 100%">

	

		<br>
		<br>
		<br>

		<!-- Verification si la session existe pour afficher le bon contenu -->
		<?php if(isset($_SESSION['pseudo'])) { ?>

			<!-- Verification si le champ avatar est vide ou non -->
			<?php if (!empty($userinfos['avatar'])) { ?>
				
				<img src="membres/avatar/<?php echo $userinfos['avatar'] ?>" width="150" class="avatar-index center-block img-responsive" alt="<?= $userinfos['pseudo'] ?>" title="<?= $userinfos['pseudo'] ?>">

				<?php } else { ?>
	
				<img src="images/avatar-inconnu.jpg" width="150" class="avatar-index center-block" alt="<?= $userinfos['pseudo'] ?>" title="<?= $userinfos['pseudo'] ?>">
				
				<?php } ?>

			<h2 class="title-presentation">Salut ! <?php echo $userinfos['pseudo']; ?></h2>
		<?php } else { ?>
			<h2 class="title-presentation">Bienvenue dans le site officiel du serveur Discord !</h2>
		<?php } ?>

		<h4>Bienvenue dans ce site web officiel du serveur Discord, si vous voulez créer un compte allez sur l'onglet du menu du navbar (Log in et Log out)</h4>

		<br>

		<!-- Pourquoi ce site web ? -->
		<h3 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-question-sign"></span> Pourquoi ce site web ?</h3>
		<h4 style="font-family: 'Raleway', sans-serif;">Ce site a été crée a été crée parce que plus tard je compterai faire un bot discord pour ce serveur en NodeJS, et ce site servira en gros de panel je parametrai toutes nos commandes, et  aussi parce que je trouvais bien l'idée d'avoir un site officiel pour le serveur, en maitrisant assez bien le SEO Referencement, je pourrais etre en premieres résultats d'une recherche Google, et pas mal de gens pourront potentiellement tomber dans le serveur</h4>

		<!-- Qui est-ce la personne derriere ce site ? -->
		<h3 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-user"></span>Qui est-derriere ce serveur ?</h3>

		<h4 style="font-family: 'Raleway', sans-serif;">Ce site a été developpé par Karim Aoulad AKA MortyLeChef(chef du serveur Discord), <b>développeur fullstack</b>, passioné par <b>l'informatique</b> en général mais surtout par la <b>programmation</b> et aussi la <b>sécurité informatique</b></h4>

		
		<!-- Développement du site -->
		<h3 style="font-family: 'PT Sans', sans-serif;"><span class="glyphicon glyphicon-edit"></span> Développement du site</h3>

		<h4 style="font-family: 'Raleway', sans-serif;">Les langages utilisés sont HTML,CSS avec Bootstrap,JS avec la librairie jQuery pour la partie <b>front-end</b>, pour le coté <b>back-end</b>, j'utilise PHP et MySQL</h4>

		<br>
		<br>
		
	</div>

	<!-- Fichier jQuery -->
	<script src="js/menu.js"></script>
	<script src="js/recherche.js"></script>
	<script src="js/slider.js"></script>


	<footer>
		<p style="color: #fff;">Tous droits réservés | Karim</p>
	</footer>


</body>
</html>