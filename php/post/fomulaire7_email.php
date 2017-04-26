<?php
/*
Exercice : Réaliser un formulaire de contact pour un futur projet.
	1. Vous devez procéder aux changement vous permettent d'être l'unique destinataire du message
	
	2.Vous devez ajouter les champs : Société, Nom, Prénom. sans retirer pour autant les champs actuels
	
*/
if($_POST)
{
	echo '<pre>'; print_r($_POST); echo '</pre>';
	
	$_POST['expediteur'] = "From : $_POST[expediteur] \n";
	$_POST['expediteur'] .= "MIME-Version: 1.0 \r\n";
	$_POST['expediteur'] .= "Content-type/ text/html; charset=utf-8 \r\n";
	
	$_POST['message'] = "Nom : $_POST[nom] \r\n"; 
	$_POST['message'] .= "Prénom : $_POST[prenom] \r\n"; 
	$_POST['message'] .= "Société : $_POST[societe] \r\n"; // nous mettons toutes les informations dans le message sans oublier le message en question
	
	mail("glx78@free.fr", $_POST['sujet'], $_POST['message'], $_POST['expediteur']);// la fonction mail() reçoit toujours 4 ARGUMENTS et l'ordre a une importance cruciale. Comme dans la plupart des fonctions, il faut respecter le NOMBRE et l'ORDRE des arguments que l'on transmet
	
	// on modifie l'argument destinataire de la fonction mail() en insérant notre propre adresse qui nous permettra d'être l'unique destinataire
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 7 email</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 7 email</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="societe">Société</label>
			<input type="text" id="societe" name="societe"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
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