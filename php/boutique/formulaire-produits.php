<?php
echo '<pre>';print_r($_POST); echo '</pre>';

$mysqli = new Mysqli("localhost", "root", "", "boutique");
// insertion dans la table via le formuilaire
if($_POST)
{
	$erreur = '';
	
	if(empty($_POST['reference']))
	{
		$erreur .= "<div style='background: red;'>Merci de rentrer une référence</div>";
	}
	if(strlen($_POST['titre']) < 3 || strlen($_POST['titre']) > 20)
	{
		$erreur .= "<div style='background: red;'>Merci de rentrer une titre entre 3 et 20 caractères</div>";
	}
	
	echo $erreur;
	
	if(empty($erreur))
	{
	$result = $mysqli->query("INSERT INTO produit(reference, categorie, titre, description, couleur, taille, prix, stock)VALUES('$_POST[reference]', '$_POST[categorie]', '$_POST[titre]', '$_POST[description]','$_POST[couleur]', '$_POST[taille]' , '$_POST[prix]' , '$_POST[stock]')");
	echo '<pre>';var_dump($result); echo '</pre>';
	echo $mysqli->error . "<br>";
	echo '<div style="background: green;">Produit enregistré</div>';
	}
}

// requete modification	
	$result = $mysqli->query("UPDATE produit SET couleur='rouge' WHERE id_produit = 1");
	echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requete UPDATE<br>';
	echo '<br>';	
// requete suppression
	$result = $mysqli->query("DELETE FROM produit WHERE id_produit = 2");
	echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requete DELETE<br>';
//------------------------------------------------------------------
// Affichage de la table : 
$resultat = $mysqli->query("SELECT * FROM produit");

echo '<table border="1" style="border-collapse: collapse;"><tr>';
while($colonne = $resultat->fetch_field())
{
	echo '<th>' . $colonne->name . '</th>';
}
echo '</tr>';
while($ligne = $resultat->fetch_assoc())
{
	echo '<tr>';
	foreach($ligne as $indice => $informations)
	{
		echo '<td>' . $informations . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
//----------------------------------------------------------------
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
		<h1>Formulaire produits</h1>
		<form method="post" action=""><!-- method : comment vont circuler les données ? - action: url de destination -->
			<label for="reference">Référence</label>
			<input type="text" id="reference" name="reference"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="categorie">Catégories</label>
			<input type="text" id="categorie" name="categorie"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="titre">Titre</label>
			<input type="text" id="titre" name="titre"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="description">Description</label>
			<textarea id="description" name="description"></textarea><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="couleur">Couleur</label>
			<input type="text" id="couleur" name="couleur"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="taille">Taille</label>
			<select name="taille">
				<option value="s">S</option>
				<option value="m">M</option>
				<option value="l">L</option>
				<option value="xl">XL</option>
			</select><br>
			<!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="prix">Prix</label>
			<input type="text" id="prix" name="prix"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<label for="stock">Stock</label>
			<input type="text" id="stock" name="stock"><br><!-- il ne faut surtout pas oublier les name sur le formulaire HTML -->
			<br>
			<input type="submit" value="envoi">
		</form>
	</body>
<html>