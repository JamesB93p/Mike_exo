<?php

// Exercice 1 Tableau en PHP

$liste = array("Prenom" => "James", "Nom" => "BOSSE", "Adresse" => "9 place Jean Jaures", "Code Postal" => "93380", "Ville" => "PIERREFITTE-SUR-SEINE", "Email" => "james.bosse@lepoles.com", "Telephone" => "06 01 02 03 04", "Date de naissance" => "1994/02/07");

echo '<pre>'; print_r($liste); echo '</pre>';

foreach($liste as $info)// le mot as fait partie du langage et est obligatoire
{
	echo $info . '<br>'; // on affiche successivement les éléments du tableau
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>

    </body>
</html>
