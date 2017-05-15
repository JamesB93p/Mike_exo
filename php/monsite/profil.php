<?php
require_once("inc/init.inc.php");
if(!internauteEstConnecte())// si le membre n'est pas connecté, il ne doit pas avoir accés à la page profil
{
	header("location:connexion.php");
}
// Exercice : Afficher sur la pagfe profil, le pseudo, email, ville, code postal, adresse du membre connecté en passant par le fichier $_SESSION 
//debug($_SESSION);// dès lors que le session_start est inscrit, les sessions sont disponible sur toutes les pages du site

$contenu .= '<p class="centre">Bonjour <strong>' . $_SESSION['membre']['pseudo'] . '</strong></p><br>';
$contenu .= '<div class="cadre"><h2>Voici vos informations de profil</h2>';
$contenu .= '<p> Votre email est : ' . $_SESSION['membre']['email'] . '<br>';
$contenu .= 'Votre ville est : ' . $_SESSION['membre']['ville'] . '<br>';
$contenu .= 'Votre code postal est : ' . $_SESSION['membre']['code_postal'] . '<br>';
$contenu .= 'Votre adresse est : ' . $_SESSION['membre']['adresse'] . '</p></div><br>';

require_once("inc/haut.inc.php");
echo $contenu;

//---------------------------------------------
echo '<h2>Suivi des commandes</h2>';
$suivi_des_commandes = executeRequete("SELECT DISTINCT etat, id_commande FROM commande WHERE id_membre = '" . $_SESSION['membre']['id_membre'] . "'");

if($suivi_des_commandes->num_rows > 0)
{
	while($commande = $suivi_des_commandes->fetch_assoc())
	{
		echo "Votre commande n° " . $commande['id_commande'] . " est actuellement " . $commande['etat'] . "<br><br>";  
	}
}
else
{
	echo "aucune commande en cours";
}

echo '<br>';
echo '<div>';
echo '<div class="conteneur"><h2>Vos actions possibles</h2>';
echo '<a href="membres.php">Modifier votre compte</a><br>';
echo '<a href="profil.php?action=sup" onclick="return(confirm(\'Etes-vous sùr de vouloir supprimer votre compte?\'))">Supprimer votre compte</a>';
echo '</div>';
if(isset($_GET['action']) && $_GET['action'] == 'sup')
{
	executeRequete("DELETE FROM membre WHERE id_membre = '" . $_SESSION['membre']['id_membre'] . "'");
	unset($_SESSION['membre']['id_membre']);
	header("location:connexion.php?action=deconnexion");
}



















require_once("inc/bas.inc.php");