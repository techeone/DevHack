<!-- Navbar -->
	<nav id="navbar">
		<h1 class="title-page"><a href="accueil" style="text-decoration: none;color: #fff;">Dev<span style="color: lightblue">Hack</span></a></h1>
		
	<!-- Menu pour écrans Ordi et Tablettes -->
		<ul id="menu">
			<!-- Verification si la session existe pour afficher ou non l'element li Deconnexion -->
			<?php
			if(isset($_SESSION['pseudo'])) { ?>
			<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
			<?php }
			?>
			<li><a href="notre-discord">NOTRE DISCORD</a></li>
			<li><a class="recherche" style="cursor: pointer;"><span class="glyphicon glyphicon-search"></span> Rechercher un membre</a></li>
			<!-- Verification si la session existe pour afficher ou non l'element li Mon Compte -->
			<?php
			if(isset($_SESSION['pseudo'])) { ?>
			<li><a href="user/<?php echo $userinfos['pseudo']; ?>"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li>
			<?php }
			?>

			<!-- Verification si le session exsite pour afficher ou non l'element li CONNEXION/INSCRIPTION -->
			<?php if(isset($_SESSION['pseudo'])) { ?>
			<!-- L'element li ne s'affiche pas -->
			<?php } else { ?>
			<li><a href="connexion-inscription"><span class="glyphicon glyphicon-log-in"></span> CONNEXION/INSCRIPTION</a></li>
			<?php } ?>

			<li><a href="accueil"><span class="glyphicon glyphicon-home"></span> ACCUEIL</a></li>
		</ul>

	<!-- Menu responsive pour écran mobile -->
	<span class="fond-menu-responsive">
		<ul id="menu-responsive">
			<?php
			if(isset($_SESSION['pseudo'])) { ?>
			<li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
			<?php }
			?>
			<li><a href="notre-discord">NOTRE DISCORD</a></li>
			<li><a  class="recherche" style="cursor: pointer;"><span class="glyphicon glyphicon-search"></span> Rechercher un membre</a></li>
			<?php
			if(isset($_SESSION['pseudo'])) { ?>
			<li><a href="user/<?php echo $userinfos['pseudo']; ?>"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li>
			<?php }
			?>

			<!-- Verification si le session exsite pour afficher ou non l'element li CONNEXION/INSCRIPTION -->
			<?php if(isset($_SESSION['pseudo'])) { ?>
			<!-- L'element li ne s'affiche pas -->
			<?php } else { ?>
			<li><a href="connexion-inscription"><span class="glyphicon glyphicon-log-in"></span> CONNEXION/INSCRIPTION</a></li>
			<?php } ?>

			<li><a href="accueil"><span class="glyphicon glyphicon-home"></span> ACCUEIL</a></li>
		</ul>
	</span>

		<span class="menu-burger"><span class="glyphicon glyphicon-align-justify"></span></span>

		<!-- <div class="infos-marquee"><p style="font-weight: bold;">Merci beaucoup, on est plus de 20 membres dans le serveur Discord :)  | Merci a au SUDO(Hakim Midako et MisterRobotFr) de m'avoir aidé pour gérer le serveur</span>, allez tous jeter un coup d'oeil sur le github de MisterRobotFr</span><a href="https://github.com/MisterRobotFr" target="_blank">- Cliquer sur le GitHub de MisterRobotFr -</a></p></div> -->
	</nav>
