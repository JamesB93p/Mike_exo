<?php
echo 'Article : ' . $_GET['article'] . "<br>";
echo 'Couleur : ' . $_GET['couleur'] . "<br>";
echo 'Prix : ' . $_GET['prix'] . "<br>";

// Faire la même chose via la boucle foreach
echo '<hr>';
foreach($_GET as $indices => $valeur)
{
	echo $indices . ' : ' . $valeur . '<br>'; 
}