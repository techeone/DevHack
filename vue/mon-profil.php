<?php
session_start();

	/*Connexion a la bdd*/
	require 'includes/init_bdd.php';

	if (isset($_GET['pseudo']) AND !empty($_GET['pseudo'])) {
		$pseudo = intval($_GET['pseudo']);
		$requser =  $bdd->prepare('SELECT * FROM membres WHERE pseudo = ?');
		$requser->execute(array($pseudo));
		$userinfos = $requser->fetch();
	}

	/*Mise a jours des informations (Modifier le identifiants)*/
	require 'includes/update-infos.php';

	/*Upload fichier pour l'avatar*/
	require 'includes/upload-avatar.php';

	/*Redirection vers index.php si la session n'existe pas*/
	if(isset($_SESSION['pseudo'])) {

	} else {
		header('Location: index.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $userinfos['pseudo'] ?></title>
	<link rel="icon" type="text/css" href="../images/favicon-devhack.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<!-- Font Awesome -->	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- Feuille de style css -->
	<link rel="stylesheet" type="text/css" href="../stylepage.css?<?php echo filemtime('stylepage.css'); ?>">
	<!-- Meta -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>

	<!-- Navbar -->
	<?php require 'includes/navbar-profil.php' ?>

	<!-- Barre de recherche -->
	<?php require 'includes/search-bar.php' ?>

	<div class="container" style="background-color: #fff;box-shadow: 1px 1px 1px 1px lightgrey;margin: 20px auto;height: 100%">

		<button class="btn btn-success" id="btn-avatar" style="margin: 10px 0px">Modifier l'avatar</button>
		<button class="btn btn-success" id="btn-edit" style="margin: 10px 0px;float: right;">Editer</button>

		<h5 style="text-align: center;color: red;"><b>IMPORTANT</b> ! Si vous voulez <b>modifier</b> la <b>photo de profil</b> <b>cliquer</b> sur le <b>bouton</b> a <b>gauche</b> pour <b>afficher</b> le champ <b>input file</b> et a <b>droite</b> pour pouvoir <b>afficher</b> le <b>bouton de validation</b></h5>
			

		<h3 class="title-presentation">Mon profil: <?php echo $userinfos['pseudo']; ?></h3>

		<center>
		<div class="container-infos-profil">

			<!-- Verification si le champ avatar est vide ou non -->
			<?php if (!empty($userinfos['avatar'])) { ?>

			<img src="../membres/avatar/<?php echo $userinfos['avatar']; ?>" width="200" style="border-radius: 100px;" class="img-responsive" id="img-profil">

			<?php } else { ?>

			<img src="../images/avatar-inconnu.jpg" width="200" style="border-radius: 100px;" class="img-responsive" id="img-profil">

			<?php } ?>

			<form method="post" action="" enctype="multipart/form-data">
			
			<h4 style="font-family: 'PT Sans', sans-serif;">Pseudo: <span class="input-text"><?php echo $userinfos['pseudo'] ?></span></h4>
			
			<h4 style="font-family: 'PT Sans', sans-serif;">Mail: <span class="input-email"><?php echo $userinfos['mail'] ?></span></h4>

			<h4 style="font-family: 'PT Sans', sans-serif;">Mot de passe: <span style="color: blue;" class="input-mdp">cliquer sur Editer pour modifier</span></h4>

			<input type="file" name="avatar" class="btn btn-info" id="file-input-avatar" style="display: none;width: 100%">

			<br>

			<br>

			<input type="submit" name="formupdate" id="btn-submit-update" class="btn btn-primary" style="display: none;">

			<p style="color: red;font-family: 'Raleway', sans-serif;">
				<?php if(isset($msg)) {echo $msg;} ?>
			</p>

			<br>


			</form>
		</div>
	</center>

	<br>
	<br>

	</div>


	<!-- Footer -->
	<?php include 'includes/footer.html' ?>

	<script src="../js/menu.js"></script>
	<script src="../js/inputs-show.js"></script>
	<script src="../js/avatar-input.js"></script>
	<script src="../js/recherche.js"></script>



</body>
</html>
