<?php

$header = "MIME-Version: 1.0\r\n";
$header .= 'From: "DevHack.shost.ca"<support@devhack.fr.nf>'."\n";
$header .= 'Content-Type:text/html; charset="utf-8"'."\n";
$header .= 'Content-Transfer-Encoding: 8bit';

$message_mail = '
		<html>
			<body>
				<h1>Bienvenue dans le site de DevHack, le serveur Discord officiel</h1>
				<div align="center">
					<img src="https://media.giphy.com/media/9zXWAIcr6jycE/giphy.gif">
					<p>Voici le lien de confirmation: </p>
					<a href="https://devhack.shost.ca/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmer votre compte</a>
				</div>
			</body>
		</html>
		';

		mail($mail, "Confirmation de compte - DevHack.shost.ca", $message_mail, $header);



?>
