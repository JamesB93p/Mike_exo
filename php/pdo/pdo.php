<?php
/*
PDO est une classe prédéfinie de PHP permettant la connexion et l'execution de requete sur la SGBD en PHP
*/
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

/*
Arguments/paramètres :
1. host = nom du serveur = localhost
2. dbname = nom de la base de données = entreprise
3. pseudo = root
4. mdp = vide sous pc et root pour mac
5. options = erreur mode activé pour faire apparaitre d'eventuelles erreurs de requete SQL, encodage en utf8 dans la BDD

$pdo est une variable representant un objet issu de la classe PDO
$pdo permet d'être connecté à la base et de formuler des requetes sql
*/
echo '<pre>'; print_r($pdo); echo '</pre>';

//-----------------------------------------------------------------
//---REQUETE D'INSERTION
/*$result = $pdo->exec("INSERT INTO employes(prenom, nom, sexe, date_embauche, salaire)VALUES('Nicolas', 'test', 'm', '2015-01-01', 30000)");
echo $result . ' enregistrement(s) affecté(s) par la requete INSERT ';*/

/*
Exec() est une méthode issue de la classe PDO qui permet de formuler et d'executer des requetes SQL
Dans le cas d'une erreur de requete SQL : boolean FALSE
Dans le cas d'une bonne requete SQL : (INT) 1 ou N selon le nombre de résultats touchés par la requete
*/
echo '<br>';
//-----------------------------------------------------------------
//--- REQUETE DE MODIFICATION
// Exercice : modifier le service de l'employé 547 par "direction"
$result = $pdo->exec("UPDATE employes SET service = 'direction' WHERE id_employes = 547");
echo $result . ' enregistrement(s) affecté(s) par la requete UPDATE';

/*
Exec() est une méthode issue de la classe PDO qui permet de formuler et d'executer des requetes SQL
Dans le cas d'une erreur de requete SQL : boolean FALSE
Dans le cas d'une bonne requete SQL : (INT) 1 ou N selon le nombre de résultats touchés par la requete
*/
echo '<br>';
//-------------------------------------------------------------------
//---- REQUETE DE SUPPRESSION
// Exercice : Supprimer les employes faisant partie de la direction 
$result = $pdo->exec("DELETE FROM employes WHERE service = 'direction'");
echo $result . ' suppression(s) affecté(s) par la requete DELETE';

/*
Exec() est une méthode issue de la classe PDO qui permet de formuler et d'executer des requetes SQL
Dans le cas d'une erreur de requete SQL : boolean FALSE
Dans le cas d'une bonne requete SQL : (INT) 1 ou N selon le nombre de résultats touchés par la requete
*/

//-----------------------------------------------------------------
//----- REQUETE DE SELECTION
$result = $pdo->query("SELECT * FROM employes WHERE nom = 'Chevel'");
$employe = $result->fetch(PDO::FETCH_ASSOC);
echo '<pre>';print_r($employe); echo '</pre>';

// afficher le même résultat que le print_r() en passant par le tableau ARRAY $employe
foreach($employe as $indices => $valeurs)
{
	echo $indices . ' : ' . $valeurs . "<br>";
}

/*
Nous avons prevu une variable $result juste avant la requete pour obtenir un retour
Dans le cas d'une erreur de requete SQL , $result contiendra : (boolean) FALSE
Dans le cas d'une bonne requete SQL , $result contiendra : un autre objet issu d'une autre classe PDOSTATEMENT

fetch(PDO::FETCH_ASSOC) permet de rendre exploitable un resultat sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif
*/

/* Exercice : selectionner toute la table employes
 A l'aide d'une boucle while afficher successivement la phrase de tous les employes de l'entreprise :
 //--- Bonjour Je suis PRENOM NOM du service SERVICE ---//
*/
echo '<hr>';
$result = $pdo->query("SELECT * FROM employes");
echo '<pre>'; print_r($result); echo '</pre>';

while($employe = $result->fetch(PDO::FETCH_ASSOC))
{
	//echo '<pre>'; print_r($employe); echo '</pre>';
	echo "Bonjour je suis $employe[prenom] $employe[nom] du service $employe[service]<br>";
}


echo '<hr>';
echo $result->rowCount() . ' enregistrement(s) récupéré(s) par la requete SELECT';

/*
Nous utilisons une boucle while parce que nous avons plusieurs lignes d'enregistremnts à récupérer
fetch(PDO::FETCH_ASSOC) permet de rendre exploitable le resultat sous forme de tableau ARRAY
$employe est donc un tableau ARRAY associatif

rowCount() est une méthode issu de la classe PDOSTATEMENT permettant d'observer le nombre d'enregistrements récupérés et affichés par une requete
*/

$resultat = $pdo->query("SELECT * FROM employes");

echo '<table border="1" style="border-collapse: collapse;"><tr>';
for($i = 0; $i < $resultat->columnCount(); $i++)
{
	$colonne = $resultat->getcolumnMeta($i);
		echo '<th>' . $colonne['name'] . '</th>';
}
echo '</tr>';
while($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
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
columnCount() est une methode issue de la classe PDOSTATEMENT qui nous permettra de savoir combien il y a de champs/colonnes au total

la boucle for est donc présente pour répéter l'action d'affichage et le traitement puisqu'il y a plusieurs champs/colonne à afficher

Pour consulter le nom des champs/colonnes de la table SQL, nous utiliserons la méthode getcolumnMeta() qui nous permettra de récolter des informations sur les champs/colonnes sous forme de tableau ARRAY

$colonne est donc un tableau ARRAY
*/






 











