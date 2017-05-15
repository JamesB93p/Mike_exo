<?php
// Exercice : créer un formulaire HTML avec les champs correspondant à la table employés(prenom, nom, sexe, service, date_embauche, salaire)
// connectez vous à la BDD et executer une requete d'insertion 
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if($_POST)
{
	$result = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire)VALUES('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]', '$_POST[service]','$_POST[date_embauche]', '$_POST[salaire]')");
	
	echo $result . ' enregistrement(s) affecté(s) par la requete INSERT ';
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire mysqli</title>
	<style>
		label{float: left; width: 95px; font-style: italic; font-family: Calibri;}
		h1{margin: 0 0 10px 200px; font-family: Calibri;}
	</style>
</head>
	<body>
		<hr>
		<h1>Formulaire mysqli</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="prenom">Prénom</label>
			<input type="text" id="prenom" name="prenom"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="nom">Nom</label>
			<input type="text" id="nom" name="nom"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="sexe">Sexe</label>
			homme<input type="radio" id="sexe" name="sexe" value="m" checked ><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			femme<input type="radio" id="sexe" name="sexe" value="f"  ><br>
			<br>
			<label for="service">Service</label>
			<input type="text" id="service" name="service"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="date_embauche">Date embauche</label>
			<input type="text" id="date_embauche" name="date_embauche"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br><br>
			<label for="salaire">Salaire</label>
			<input type="text" id="salaire" name="salaire"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html>