<?php
if($_POST)
{
	echo 'Nom  : ' . $_POST['nom'] . '<br>';
	echo 'Prenom  : ' . $_POST['prenom'] . '<br>';
	echo 'Ville  : ' . $_POST['ville'] . '<br>';
	echo 'Adresse  : ' . $_POST['adresse'] . '<br>';
	echo 'Code Postal  : ' . $_POST['cp'] . '<br>';
	echo 'Sexe  : ' . $_POST['sexe'] . '<br>';
	echo 'Description  : ' . $_POST['description'] . '<br>';
	echo '<hr>';
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
	<h1>Formulaire</h1>
	<form method="post" action="">

		<label for="nom">Nom</label>
		<input type="text" id="nom" name="nom"><br>
		<br>

		<label for="prenom">Prenom</label>
		<input type="text" id="prenom" name="prenom"><br>
		<br>

		<label for="ville">Ville</label>
		<input type="text" id="ville" name="ville"><br>
		<br>

		<label for="cp">Code postal</label>
		<input type="text" id="cp" name="cp"><br>
		<br>

		<label for="adresse">Adresse</label>
		<textarea id="adresse" name="adresse"></textarea>
		<br><br>

		<label for="sexe">Sexe</label>
		<select id="sexe" name="sexe">
			<option value="h">Homme</option>
			<option value="f">Femme</option>
		</select>
		<br><br>

		<label for="description">Description</label>
		<textarea id="description" name="description"></textarea>
		<br>

		<input type="submit" value="envoi">
	</form>
</body>
<html>
