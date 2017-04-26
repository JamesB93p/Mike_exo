<?php
$nom_fichier = "liste.txt";
$fichier = file($nom_fichier);

echo '<pre>'; print_r($fichier); echo '</pre>'; // la fonction file() fait tout le travail, elle retourne chaque ligne d'un fichier à des indices différents d'un tableau ARRAY

// Exercice : afficher les données du tableaux

foreach($fichier as $indices => $valeurs)
{
	echo $indices . ' - ' . $valeurs . "<br>";
}

echo '<hr>';

echo implode($fichier, "<br>"); // affichage du tableau ARRAY avec un passage à la ligne


