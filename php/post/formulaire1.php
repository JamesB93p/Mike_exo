<?php
if($_POST)// si l'on clique sur le bouton envoi
{
	echo "Prénom : " . $_POST['prenom'] . "<br>";
	echo "Déscription : " . $_POST['description'] . "<br>";
}
echo '<pre>';print_r($_POST); echo '</pre>';
// au premier chargement de la page sans le if($_POST) nous avons 2 erreurs undefined, ce qui est tout à fait normal puisqu'il n'y a pas eu d'action sur le formulaire, si l'on recharge la page, les erreurs disparaissent puisqué nous avons cliqué sur le bouton envoi, l'interpréteur détecte à ce moment la l'existence du formulaire. 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire 1</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire 1</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="description">Description</label>
			<textarea id="description" name="description"></textarea><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html>