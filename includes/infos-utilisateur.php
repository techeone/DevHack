<?php

	$id = $_SESSION['id'];
	$req_infos = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$req_infos->execute(array($id));
	$userinfos = $req_infos->fetch();


?>