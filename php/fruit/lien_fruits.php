<?php
/* Exercice : 
1. effectuer 4 liens HTML pointant sur la m�me page avec le nom des fruits.
2. Faites en sortent d'envoyer "cerises" dans l'URL si l'on clic sur le lien "cerises"
3. Tenter d'afficher "cerises" sur la page web si l'on a cliqu� dessus (si "cerises est pass� dans l'URL par cons�quent")
4. Envoyer l'information � la fonction d�clar�e "calcul()" afin d'afficher le prix pour 1kg de "cerises"
*/
include("fonction.inc.php");

if($_GET)
{
	echo "Votre fruit est : " . $_GET['choix'] . "<br>"; 
	echo calcul($_GET['choix'], 1000);
}
echo '<pre>';print_r($_GET);echo '</pre>';

?>

<a href="?choix=cerises">Cerises</a>
<a href="?choix=bananes">Bananes</a>
<a href="?choix=pommes">Pommes</a>
<a href="?choix=peches">Peches</a>