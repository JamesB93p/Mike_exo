<?php
/*
Un cookie est un fichier sauvegardé sur l'ordinateur de l'internaute avec des informations à l'intérieur
Les informations à l'intérieur ne sont pas sensibles(pas de mot de passe), il s'agit en général de préférences.
Exemple : langue dans laquelle l'internaute souhaite visiter le site, derniers produits consultés dans une boutique etc....

Exercice : effectuer des liens pointant sur la même page dans une liste ul li pour 4 pays : France, espagne, Angleterre, Italie 
*/
?>
<h1>Votre langue</h1>
<ul>
	<li><a href="?pays=fr">France</a></li>
	<li><a href="?pays=es">Espagne</a></li>
	<li><a href="?pays=an">Angleterre</a></li>
	<li><a href="?pays=it">Italie</a></li>
</ul>

<?php
if(isset($_GET['pays'])) // si un pays est passé dans l'URL c'est que nous avons cliqué sur un lien
{
	$pays = $_GET['pays'];
}
elseif(isset($_COOKIE['pays'])) // on ne rentre que dans le elseif uniquement si la condition du if n'est pas passé et qu'un cookie existe
{
	$pays = $_COOKIE['pays'];
}
else // sinon, dans le scénario ou le if et le elseif ne se déclenchent pas, le cas par default est appliqué
{
	$pays = 'fr';
}
// on ressort des ces conditions avec la variable $pays affectée par une valeur de l'URL, d'un cookie ou par défault

echo '<pre>'; print_r($_COOKIE); echo '</pre>';

$un_an = 365*24*3600; // cookie en seconde pour un an
setCookie("pays",$pays,time()+$un_an); // setCookie est une fonction prédéfinie permettant de créer un fichier cookie, elle recoit 3 arguments : le nom du cookie, le contenu du cookie et la durée de vie du cookie

// Exercice : afficher grace à une condition switch une phrase en fonction du lien cliqué

switch($pays)
{
	case 'fr': 
	echo 'Vous êtes sur un site en français';
	break;
	
	case 'es': 
	echo 'Vous êtes sur un site en espagnol';
	break;
	
	case 'an': 
	echo 'Vous êtes sur un site en anglais';
	break;
	
	case 'it': 
	echo 'Vous êtes sur un site en italien';
	break;
}
?>











