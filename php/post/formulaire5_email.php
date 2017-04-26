<?php
// Créer un formulaire avec les champs : destinataire, expediteur, sujet, message. Contrôler les champs du formulaire, les afficher en haut de la page
if($_POST)
{
	echo '<pre>'; print_r($_POST); echo '</pre>';
	
	$_POST['expediteur'] = 'From : ' . $_POST['expediteur'];
	
	mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'], $_POST['expediteur']); // la fonction mail() reçoit toujours 4 ARGUMENTS et l'ordre a une importance cruciale. Comme dans la plupart des fonctions, il faut respecter le NOMBRE et l'ORDRE des arguments que l'on transmet
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 5 email</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 5 email</h1>
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