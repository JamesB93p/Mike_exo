<?php
// Mysqli est une classe prédéfinie de PHP permettant la connexion et l'execution de requete sur le SGBD Mysql en PHP

$mysqli = new Mysqli("localhost", "root", "", "entreprise");
//les arguments/paramètres correspondent à 
/*
nom du serveur = localhost
pseudo = root
mot de passe = sous xampp, le mot de passe est vide - sur MAC le mot de passe est root
nom de la base de données = entreprise

$mysqli est un objet issu de la classe Mysqli, elle nous permet d'être connecté à la BDD et de formuler des requetes
*/
$mysqli->set_charset("utf8"); // encodage en ut8 dans la BDD

echo '<pre>'; print_r($mysqli); echo '</pre>';

$mysqli->query("mauvaise requete volontaire...............");
echo $mysqli->error . "<br>";
// query() est une fonction/methode issu de la classe Mysqli qui nous permet de formuler et d'executer des requetes SQL
// la propriété nommé error de l'objet Mysqli nous permet d'avoir accés aux éventuelles erreurs SQL
echo '<hr>';
//---- REQUETE INSERTION
$result = $mysqli->query("INSERT INTO employes(prenom, nom, sexe, date_embauche, salaire)VALUES('Grégory', 'Lacroix', 'm', '2015-01-01', 30000)");
echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requete INSERT<br>';
var_dump($result);
/*
Dans le cas d'une bonne requete SQL, $result contiendra :(boolean) TRUE
Dans le cas d'une mauvaise requete SQL, $result contiendra :(boolean) FALSE

la propriété affected_rows issu de l'objet $mysqli permet d'observer le nombre d'enregistrements affectés par une requete
*/
echo '<br>';
//----- REQUETE DE MODIFICATION
// Exercice : modifier le salaire de l'employes 350 : 5100 par 1100
$result = $mysqli->query("UPDATE employes SET salaire = 1100 WHERE id_employes = 350");
echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requete UPDATE<br>';
var_dump($result);
/*
Dans le cas d'une bonne requete SQL, $result contiendra :(boolean) TRUE
Dans le cas d'une mauvaise requete SQL, $result contiendra :(boolean) FALSE
*/
echo '<br>';
//---------------------------------------------------------
// REQUETE DE SUPPRESSION
// Exerice : Supprimer l'employes n° 350
$result = $mysqli->query("DELETE FROM employes WHERE id_employes = 350");
echo $mysqli->affected_rows . ' enregistrement(s) affecté(s) par la requete DELETE<br>';
var_dump($result);
/*
Dans le cas d'une bonne requete SQL, $result contiendra :(boolean) TRUE
Dans le cas d'une mauvaise requete SQL, $result contiendra :(boolean) FALSE
*/

//-----------------------------------------------------------------
//--- REQUETE DE SELECTION
$result = $mysqli->query("SELECT * FROM employes WHERE prenom='Julien'");
$employe = $result->fetch_assoc();
//echo '<pre>'; print_r($result); echo '</pre>';
echo '<pre>'; print_r($employe); echo '</pre>';

echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]<br>";
echo "Bonjour je suis " .  $employe['prenom'] . " " . $employe['nom'] .  " du service " . $employe['service']. "<br>";

/*
Nous avons prévu une variable $result juste avant la requete pour avoir un retour
Dans le cas d'une erreur de requete SQL, $result contiendra : (boolean) FALSE
Dans le cas d'une bonne requete  SQL, $result contiendra : (objet) MYSQLIO_RESULT si la requete est bonne, on obient un autre objet issu d'une autre classe (MYSQLI_RESULT)

fetch_assoc():
la résultat sous frome d'objet MYSQLI_RESULT n'est pas exploitable en l'état
la méthode fetch_assoc() issu de la classe MYSQLI_RESULT permet de rendre ce resultat exploitable sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif (associatif = avec des clés nominatives)
*/
echo '<hr>';

$result = $mysqli->query("SELECT * FROM employes");
while($employe = $result->fetch_assoc())
{
	//echo '<pre>'; print_r($employe); echo '</pre>';
	echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]<br>";
}
echo $result->num_rows . ' enregistrement(s) récupéré(s) par la requete SELECT';

/*
Dans le cas d'une erreur de requete SQL, $result contiendra : (boolean) FALSE
Dans le cas d'une bonne requete  SQL, $result contiendra : (objet) MYSQLIO_RESULT si la requete est bonne, on obient un autre objet issu d'une autre classe (MYSQLI_RESULT)

While :
Nous avons plusieurs lignes d'enregistrements, il est donc necessaire de répéter le traitement fetch_assoc() afin de rendre le resultat exploitable sous forme d'ARRAY
La boucle while permet d'afficher chaque ligne de la table(tant que l'on possède des enregistrments, on les affiche)

$employe est donc un tableau ARRAY associatif
*/

$resultat = $mysqli->query("SELECT * FROM employes");

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
/*
Pour consulter le nom des champs/colonnes de la table SQL, nous aurons besoin d'utiliser la methode fetch_field() issu de la classe MYSQLI_RESULT qui permet de recolter des informations sur les champs/colonnes

la boucle while est présente pour répéter cette action puisqu'il y a plusieurs champs/colonne à afficher
On obtient un objet $colonne issue d'une autre classe : Stdclass
$colonne->name : permet de récolter les noms des champs de la table

fetch_assoc issu de la classe MYSQLI_RESULT permet de traiter le résultat et le rendre exploitable sous forme de tableau ARRAY.

while permet de répéter cette action tant qu'il y a des résultats et de passer à la ligne d'enregistrment suivante pour faire avancer les traitements

La boucle foreach va nous permettre de parcourir notre tableau ARRAY par la variable $ligne et d'afficher chacune des informations contenues à l'intérieur

En résumé : 
la boucle while est présente pour traiter chaque employé(et avancé sur l'employé suivant) tandis que, la boucle foreach est présente pour traiter et afficher chaque information pour chaque employé


*/















