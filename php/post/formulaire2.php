<?php
// Exercice : créer un formulaire avec les 3 champs (ville, code postal, adresse), récupérer les saisies juste au dessus en précisant l'étiquette correpondante
if($_POST)
{
	echo 'Ville  : ' . $_POST['ville'] . '<br>'; 
	echo 'Adresse  : ' . $_POST['adresse'] . '<br>'; 
	echo 'Code Postal  : ' . $_POST['cp'] . '<br>'; 
	echo '<hr>';
	// Récupération des saisies via une boucle
	foreach($_POST as $indices => $valeurs)
	{
		echo $indices . ' : ' . $valeurs . '<br>'; 
	}
	echo '<pre>';print_r($_POST);echo '</pre>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 2</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 2</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="ville">Ville</label>
			<input type="text" id="ville" name="ville"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="cp">Code postal</label>
			<input type="text" id="cp" name="cp"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="adresse">Adresse</label>
			<textarea id="adresse" name="adresse"></textarea><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html>