<?php
// Exercice : cr�er un formulaire avec les champs: pseudo, email en r�cup�rant et en affichant les informations directement sur la page formulaire4.php

// Exercice : faites en sorte d'informer l'internaute qu'il faut saisir un pseudo et email dans le cas o� les champ sont laiss�s vide

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 3</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 3</h1>
		<form method="post" action="formulaire4.php"><!-- method : comment vont circuler les donn�es ? - action: url de destination -->
			<label for="pseudo">Pseudo</label>
			<input type="text" id="pseudo" name="pseudo"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="email">Email</label>
			<input type="text" id="email" name="email"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html> 