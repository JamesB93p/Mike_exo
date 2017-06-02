<?php

// tableau
$tableau = array(
    "Prenom" => "Jean-Paul",
    "Nom" => "Belmondo",
    "Adresse" => "666 rue du paradis",
    "Code postal" => "75000",
    "Ville" => "Paris",
    "Email" => "bebel@lemarginal.org",
    "Téléphone" => "0612345678",
    "Date de naissance" => "1933-04-09", // format anglo-saxon : YYYY-MM-DD
);
// findu tableau

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exercice 1 correction</title>
    </head>
    <body>
        <ul>
            <?php
            //affichage PHP sous forme de liste
            foreach ($tableau as $cle => $valeur) {
                echo "<li>";
                // retraitement de la date de naissance (bonus
                if ($cle == 'Date de naissance') {
                    $newdate = date("d-m-Y", strtotime($valeur));
                    // srtotime() transforme une date au format anglo-saxon en un timestamp unix et en 1er parametre je met le format d'affichage souhaité (ici francais)
                    echo "$cle => $newDate";
                }else{        
                echo "$cle => $valeur";
            }
                echo "</li>";
            }
             ?>
        </ul>

    </body>
</html>
