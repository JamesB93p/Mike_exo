<?php
if($_POST)
{
	// affichage des sasies pour être sur de les obtenir avant de les exploiter
	echo '<pre>'; print_r($_POST); echo '</pre>';
	
	$_POST['expediteur'] = "From : $_POST[expediteur] \n";
	$_POST['expediteur'] .= "MIME-Version: 1.0 \r\n"; // MIME est un standard d'envoi de mail, il n'existe qu'une seule version
	$_POST['expediteur'] .= "Content-type/ text/html; charset=utf-8 \r\n";
	// Grace à cette ligne de code, on pourra envoyer directement du HTML dans le message(pratique pour l'envoi d'une newsletter) ex : <div style="background: #d0d0d0;">Bonjour !</div>
	
	mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'], $_POST['expediteur']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 6 email</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 6 email</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="destinataire">Destinataire</label>
			<input type="text" id="destinataire" name="destinataire"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="expediteur">Expediteur</label>
			<input type="text" id="expediteur" name="expediteur"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="sujet">Sujet</label>
			<input type="text" id="sujet" name="sujet"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="message">Message</label>
			<textarea id="message" name="message"></textarea><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html>