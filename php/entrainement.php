<style>h2{margin: 0; font-size: 15px; color: red;}</style>
<h2>Ecritures et affichage</h2><!-- Nous pouvons écrire du HTML dans un fichier ayant l'extension PHP, l'inverse n'est pas possible -->
<?php
echo 'Bonjour'; // echo  est une instruction d'affichage, nous pouvons le traduire par "affiche moi"
echo '<br>'; // Nous pouvons également y mettre du HTML
echo 'Bienvenue'; // si vous vous rendez dans le code-source, vous ne verrez pas le PHP car le langage est interprété.

echo '<hr><h2> Commentaires </h2>';
?>
<strong>Bonjour</strong><!-- nous voyons qu'il est également possible de fermer et ré-ouvrir php pour mélanger du code PHP&HTML -->
<?php
echo '<br>';
echo 'Texte'; // ceci est un commentaire sur une seule ligne
echo 'Texte'; # ceci est un commentaire sur une seule ligne
echo 'Texte'; /* ceci est un commentaire
sur plusieurs lignes */
echo '<br>';
print 'Nous sommes mardi'; // print est une autre instruction d'affichage. Il n'y a pas de différence avec "echo"

//-------------------------------------------------------------

echo '<hr><h2>Variables : types / déclaration / affectation</h2>';
// une variable est un espace nommé permettant de conserver une valeur
// déclaration d'une variable toujours avec le signe $ suivi de son nom
// jamais d'accent et d'espace et jamais de chiffre aprés le signe $.
// $2a -> mauvaise syntaxe - $a2 -> bonne syntaxe
// C'est nous qui definissons le nom de la variable
$a = 127; //affectation de la valeur 127 dans la variable nommé "a"
echo gettype($a); // gettype est une fonction prédéfinie nous permettant de voir le type d'une variable. il s'agit d'un entier : integer.
echo '<br>';
$b = 1.5;
echo gettype($b); // un nombre à virgule : double
echo '<br>';
$c = 'Une chaine';
echo gettype($c); // là non plus, nous ne regardons pas le contenu d'une variable mais son type : string
echo '<br>';
$d = '127';
echo gettype($d); // string;, entre quote l'interpreteur traduit que c'est une chaine de caractères
echo '<br>';
$e = true;
echo gettype($e); // boolean
echo '<br>';
$f = false;
echo gettype($f); // boolean

echo '<hr><h2> Concaténation </h2>';
$x = 'bonjour ';
$y = 'tout le monde';
echo $x . $y . '<br>'; // point de concaténation que l'on peux traduire par "suivi de"
echo "$x $y <br>"; // même chose sans concaténation, entre guillements les variables sont évaluées
echo 'Hey ! ' . $x . $y; // concaténation texte et variable
echo '<br>','coucou','<br>'; // concaténation avec une virgule(la virgule et le point de concaténation sont similaires)

//---------------------------------------------------------------

echo '<hr><h2> Concaténation lors de l\'affectation</h2>';
$prenom1 = 'Bruno'; // affectation de la valeur "Bruno" sur la variable $prenom1
$prenom1 = 'Claire'; // affectation de la valeur "Claire" sur la variable $prenom1
echo $prenom1 . '<br>'; // affiche "Claire", cela remplace "Bruno" par "Claire"

$prenom2 = "Nicolas "; // affectation de la valeur "Nicolas" sur la variable $prenom2
$prenom2 .= "Marie"; // // affectation de la valeur "Marie" sur la variable $prenom2
echo $prenom2 . '<br>'; // affiche "Nicolas Marie" ... cela ajoute SANS remplacer la valeur précédente grace à l'opérateur  .=

//----------------------------------------------------------

echo '<hr><h2>Guillemets et Quotes</h2>';
$message = "aujourd'hui";
$message = 'aujourd\'hui';
$txt = 'Bonjour';
echo $txt . ' tout le monde' . '<br>'; // concaténation
echo "$txt tout le monde<br>"; // Affichage dans les guillemets, la variable est évaluée
echo '$txt tout le monde'; // affichage dans des qotes, la variable n'est pas évaluée

//-----------------------------------------------------------
echo '<hr><h2> Constante et constante magique </h2>';
// UNe constante tout comme une variable permet de conserver une valeur sauf que comme son nom l'indique, la valeur est... constante! c'est à dire que l'on ne pourra pas la changer durant l'execution du script. Contrairement à une variable qui elle peut... varier!
define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscule
echo CAPITALE . "<br>"; // affichage du contenu de la constante CAPITALE : Paris

// Constante magique
echo __FILE__ . "<br>"; // chemin complet vers le fichier
echo __LINE__ . "<br>"; // Affiche le numéro de la ligne

//----------------------------------------------
// Exercice : afficher Bleu-Blanc-Rouge (avec les tirets) en mettant chaque couleur dans une variable
$bleu = "Bleu";
$blanc = "Blanc";
$rouge = "Rouge";

echo "$bleu-$blanc-$rouge<br>";
echo $bleu . '-' . $blanc . '-' . $rouge . '<br>';

$couleur = "Bleu-";
$couleur .= "Blanc-";
$couleur .= "Rouge";

echo $couleur;
//-----------------------------------------------------------
echo '<hr><h2>Opérateurs arithmétique</h2>';
$a = 10;
$b = 2;
echo $a + $b . '<br>'; // affiche 12
echo $a - $b . '<br>'; // affiche 8
echo $a * $b . '<br>'; // affiche 20
echo $a / $b . '<br><hr>'; // affiche 5

// opération / affectation
$a = 10;
$b = 2;
$a += $b; // equivault à $a = $a + $b ($a = 10 + 2)
echo $a . '<br>'; // affiche 12
$a -= $b; // equivault à $a = $a - $b ($a = 12 - 2)
echo $a . '<br>'; // affiche 10
$a *= $b; // equivault à $a = $a * $b ($a = 10 * 2)
echo $a . '<br>'; // affiche 20
$a /= $b; // equivault à $a = $a / $b ($a = 20 / 2)
echo $a . '<br>'; // affiche 10
// contexte : pratique pour faire des calculs sur un panier...

//-------------------------------------------------------------------
echo '<hr><h2>Structures conditionnelles (if/else) - opérateurs de comparaison</h2>';

/*
Opérateurs 		signification
= 				est égale
== 				comparaison de la valeur
===				comparaison de la valeur et du type
!=				différent de
!				n'est pas
>				strictement supérieur...
<				strictement inférieur...
<=				inférieur ou égal à
>=				supérieur ou égla à
&& / AND		et
|| / OR			ou
XOR				ou exclusif
*/

// isset & empty
// isset test si c'est définie ------ empty test si c'est vide
$var1 = false;
$var2 = ""; // chaine vide
// différence entre empty et isset : si on met la var2 en commentaire, on ne passe plus dans le if isset, mais on continue de rentrer dans le if empty

if(empty($var1))
{
	echo '0, vide ou non définie<br><br>'; // empty: test si c'est à 0, vide ou non définie
}

if(isset($var2))
{
	echo 'var2 existe et est définie par rien<br><br>'; // isset : test l'existance d'une variable
}

//------------------------------------------------------------
$a = 10;
$b = 5;
$c = 2;

if($a > $b) // si A est supérieur à B
{
	echo "A est bien supérieur à B<br><hr>"; // instruction d'affichage
}
else // sinon... cas par défault
{
	echo "Non c'est B qui est supérieur à A<br>";
}

//-------------------------------------------------------------
/*
$a = 10;
$b = 5;
$c = 2;
*/
if($a > $b && $b > $c) // Si A est supérieur à B ET que B est supérieur à C
{
	echo "OK pour les 2 conditions<br>"; // instruction d'affichage
}
if($a == 9 || $b > $c)// Si la valeur de A est égal à 9 OU que B est supérieur à C, le double = permet de comparé la valeur à l'intérieru de la variable
{
	echo "OK pour au moins l'une des 2 conditions<br>"; // instruction d'affichage
}
else // cas par défault
{
	echo "Nous sommes dans le else";
}

//---------------------------------------------------------------
/*
$a = 10;
$b = 5;
$c = 2;
*/
if($a == 8) // Si la valeur de A est égal à 8
{
	echo "1 - A est égal à 10<br>"; // instruction d'affichage
}
elseif($a != 10) // Sinon SI A est différent de 10
{
	echo "2 - A est différent de 10<br>"; // instruction d'affichage
}
else // sinon... cas par défault
{
	echo "3 - tout le monde a faux<br>";
}

// Avec des elseif, si la condition est respectée, le script s'arrete et les conditions suivantes ne sont pas évaluées, au contraire en posant plusieurs conditions if, elles seront toute évaluées même si les conditions précedentes sont respectées.

// Condition exclusive
if($a == 10 XOR $b == 4) // XOR : seulement l'une des 2 conditions doit être valide
{
	echo 'ok condition exculsive<br>'; // si les 2 conditions sont bonnes ou mauvaise, nous ne rentrons pas ici
}
else{
	echo "Les deux conditions sont soient bonne ou mauvaise";
}

//---------------------------------------------------------------
// Forme contractée : 2ème possibilité d'écriture des if
echo ($a == 10) ? "A est égal à 10" : "A n'est pas égal à 10";
// le ? remplace le if -- les : remplace le else
echo "<br>";
//---------------------------------------------------------------
// Comparaison
$vara = 1;
$varb = "1";
echo gettype($vara) . '<br>';
echo gettype($varb) . '<br>';
if($vara === $varb)
{
	echo "il s'agit de la la même chose";
}
// Avec la présence, le triple égal, le test ne fonctionne pas car les types des variables sont différents. INT(entier) n'est pas égal à STRING(chaine de caractère)
// = affectation
// == comparaison de la valeur
// === comparaison de la valeur et du type

//------------------------------------------------------------------
echo '<hr><h2> Conditions SWITCH </h2>';
// les 'case' represente des cas différents dans lesquel nous pouvons potentiellement tomber
// le 'break' permet d'interrompre le script si nous rentrons dans un des cas
// Si l'on a un certains nombre de cas à comparer; il serait intéressant d'utiliser la condition switch
$couleur = 'jaune';
switch($couleur)
{
	case 'bleu':
	echo "Vous aimez le bleu";
	break;

	case 'rouge':
	echo "Vous aimez le rouge";
	break;

	case 'vert':
	echo "Vous aimez le vert";
	break;

	default: // cas par défault, si l'on ne rentre pas dans les cas précédent
	echo "Vous n'aimez ni le bleu, ni le rouge, ni le vert";
	break;
}

// Exercice : Pouvez-vous faire la même condition switch avec des if/else? est-ce possible?
$couleur = 'jaune';
if($couleur == 'bleu')
{
	echo "Vous aimez le bleu";
}
elseif($couleur == 'rouge')
{
	echo "Vous aimez le rouge";
}
elseif($couleur == 'vert')
{
	echo "Vous aimez le vert";
}
else{
	echo "Vous n'aimez ni le bleu, ni le rouge, ni le vert";
}
//--------------------------------------------------------------
echo "<hr><h2>Structure itérative : boucle</h2>";
$i = 0; // valeur de départ
while($i < 3) // tant que $i est inférieur à 3
{
	echo "$i---";
	$i++; // ceci est une forme contractée de : $i = $i + 1
}

echo "<br>";
// Exercice : faites en sorte de ne pas avoir les tirets à la fin : 0---1---2
$i = 0;
while($i < 3)// tant que $i est inférieur à 3
{
	if($i == 2)
	{
		echo $i; // je rentre 1 fois ici
	}
	else{
		echo "$i---"; // je rentre 2 fois ici
	}
	$i++; // incrémentation du "compteur" pour que la boucle puisse tourner
}
//---------------------------------------------------------------
// Boucle for
echo '<br>';

for($j = 0; $j < 16; $j++) // valeur de départ ; condition d'entrée ; incrémentation
{
	echo $j . "<br>";
}

// exercice : afficher 30 options via une boucle

echo '<select>';
echo '<option>1</option>';
echo '<option>2</option>';
echo '</select>';
echo "<br>";

echo '<select>';
for($j = 0; $j <= 30; $j++)
{
	echo "<option>" . $j . "</option>";
}
echo '</select>';

echo '<br>';

echo '<select>';
for($j = 30; $j > 0; $j--) // décrémentation, equivault à $j = $j - 1
{
	echo "<option>" . $j . "</option>";
}
echo '</select>';

// Exercice : faites une boucle qui affiche de 0 à 9 sur le même ligne sous forme de tableau HTML

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr>";
for($j = 0; $j <= 9; $j++)
{
	echo "<td>" . $j . "</td>";
}
echo "</tr>";
echo "</table>";

echo '<br>';
//------------------------------------------------------------------
// Exercice : Faire la même chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles
echo "<table border='1' style='border-collapse: collapse;'>";
for($ligne = 0; $ligne < 10; $ligne++)
{
	echo '<tr>';
	for($cellule = 0; $cellule < 10; $cellule++)
	{
		echo "<td>" . (10 * $ligne + $cellule) . "</td>";
	}
	echo '</tr>';
}
echo "</table>";
//-----------------------------------------------------
// 2ème solution
echo '<br>';

$compteur = 0;
echo "<table border='1' style='border-collapse: collapse;'>";
for($ligne = 0; $ligne < 10; $ligne++)
{
	echo '<tr>';
	for($cellule = 0; $cellule < 10; $cellule++)
	{
		echo "<td>" . $compteur . "</td>";
		$compteur++;
	}
	echo '</tr>';
}
echo "</table>";
//-----------------------------------------------------------
echo '<hr><h2>Fonctions prédéfinies</h2>';
//Une fonction prédéfinie permet de réaliser un traitement spécifique, vous pouvez les consulter dans la doc , il y en a beaucoup (php.net)

echo '<br>Date : <br>';
echo date("d/m/Y"); // exemple de la fonction prédéfinie permettant de renvoyer la date. le Y majuscule permet d'obtenir 2017 et le y minuscule permet d'obtenir 17

// quand on utilise une fonction prédéfinie, on doit toujours se demander ce que l'on doit lui envoyer comme argument/paramètres pour qu'elle s'execute et ce qu'elle peut retourner

//-------------------------------------------------------------
echo '<hr><h2>Fonctions prédéfinies : traitement des chaines </h2>';

$email = "glx78@free.fr";

echo strrpos($email, "r");
echo '<br>';
echo strpos($email, "@"); // indique la position 5 du caractère "@" dans la chaine (5 et non pas 6 car cela commence de 0)
echo '<br>';
$email2 = "Bonjour";
echo strpos($email2, "@"); // cette ligne ne retourne rien, pourtant il y a bien quelque chose à l'intérieur: FALSE!

var_dump(strpos($email2, "@")); // grace au var_dump on aperçoit le FALSE si le caractère "@" n'est pas trouvé. var_dump est donc une instruction d'affichage améliorée que l'on utilise régulièrement en phase de développement
echo '<br>';
// strpos() est une fonction prédéfinie permettant de trouver la position d'un caractère dans une chaine:
// Succés : int (entier)
// echec : boolean false
/* argument(s):
1. Nous devons lui fournir la chaine dans laquelle nous souhaitons chercher
2. nous devons lui fournir l'information à chercher.

contexte : nous pourrons l'utiliser pour savoir si une adresse email à un format conforme
*/
//----------------------------------------------------------------
$phrase = "Mettez une phrase à cet endroit";
echo iconv_strlen($phrase);

/*
iconv_strlen() est une fonction  prédéfinie permettant de retourner la taille d'une chaine :
Succés : int (entier)
echec : boolean false
Nous devons lui fournir en argument la chaine dans laquelle nous souhaitons connaitre la taille

contexte : nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors d'une inscription ont des tailles conformes

*/
echo '<br>';
//------------------------------------------------------------
$texte = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut luctus nibh. Quisque et nisl vestibulum, maximus purus at, fermentum est. In eget scelerisque erat. Nullam non diam lacus. Sed pharetra luctus tempus. Integer quis ex facilisis, sagittis justo et, commodo lorem. Praesent sit amet velit ac nisl faucibus pulvinar in in massa.";

echo substr($texte, 0, 20) . "...<a href=''>Lire la suite</a>";
/*
retourne une partie du texte seulement, avec un lien pour la suite de l'article

substr() est une fonction prédéfinie permettant de retourner une partie de la chaine.
Succés : int (entier)
echec : boolean false
argument(s):
1. nous devons lui fournir la chaine que l'on souhaite couper
2. nous devons lui préciser la position de début
3. nous devons lui préciser la position de fin

Contexte : substr est souvent utilisé pour afficher des actualités avec une "accroche"
*/

echo '<hr><h2>Fonctions utilisateurs</h2>';
// les fonctions qui ne sont pas prédéfinies dans le langage sont déclaré puis executé par l'utilisateur

// Nous aurions pu donner un autre nom à cette fonction, c'est nous qui decidons
function separation() // déclaration d'une fonction prévue pour ne pas recevoir d'arguments
{
	echo "<hr><hr><hr>";
}

separation(); // execution de la fonction

//-------------------------------------------------------------
// Fonction avec argument : les arguments sont des paramètres fournis à la fonction et lui permettent de compléter ou modifier son comportement initialement prévu

function bonjour($qui) // $qui, ça ne sort pas de nul part. Cela permet de recevoir un argument, il s'agit d'une variable de réception
{
	echo "Bonjour $qui <br>";
}
$prenom = "Stevy";
// execution
bonjour("Pierre"); // si la fonction reçoit un argument, il faut lui envoyer un argument
bonjour($prenom); // l'argument peut être aussi une variable

//-------------------------------------------------------------
function appliqueTva($nombre)
{
	return $nombre * 1.2;// (1+20/100) calcul du taux de tva à 20%, une fonction peut retourner quelque chose (à ce moment la on quitte la fonction)
}

echo appliqueTva(150);// on execute la fonction, on place un echo puisque l'on utilise le mot clé return à l'intérieur de la fonction

// Exercice : Pourriez vous améliorer cette fonction afin que l'on puisse calclué un nombre avec les taux de notre choix
echo '<br>';

function appliqueTva2($nombre, $taux)// une fonction peut recevoir plusieurs arguments
{
	return $nombre * $taux;
	//return $nombre * (1+$taux/100); calcul du taux
}

echo appliqueTva2(150,1.2);
// attention nous l'avons appelé appliquTva2 car 2 fonctions ne doivent pas posséder le même nom
echo '<br>';
//-------------------------------------------------------------------
meteo("hiver", 15);// il est possible d'executer une fonction avant de l'avoir déclarée
function meteo($saison, $temperature)// avec 2 arguments à receptionner et par conséquent à envoyer
{
	echo "Nous sommes en $saison et il fait $temperature degre(s) <br>";
}

// Exercice : gérer le S de degréS avec un if/else

function exOmeteo($saison, $temperature)
{

	if($temperature > 1 || $temperature < -1)
	{
		echo "Nous sommes en $saison et il fait $temperature degrés";
	}
	else
	{
		echo "Nous sommes en $saison et il fait $temperature degré";
	}
}

exOmeteo("hiver", 0);
echo '<br>';
//---------------------------------------------------------------
$pays = "France";
function affichagePays()
{
	global $pays;// le echo qui suit ne fonctionnerait pas si nous n'avions pas mis le mot-clé global pour importer tout ce qui est déclaré de l'espace global dans l'espace local
	echo $pays;
}
affichagePays();
// lorsqu'on travail à l'intérieur d'une fonction en PHP, on se trouve dans l'espace local, tout ce qui est déclaré à l'extérieur d'une fonction se trouve dans l'espace global(espace par défault)
echo '<br>';
//--------------------------------------------------------------
function jourSemaine()
{
	$jour = "lundi";// variable locale
	return $jour; // une fonction peut retourner quelque chose(à ce moment la on quitte la fonction)
	echo "ALLO";
}
//echo $jour; ne fonctionne pas car cette variable n'est connu qu'à l'intérieur de la fonction
echo jourSemaine();// on éxecute la fonction

//-----------------------------------------------------------------
echo '<hr><h2> Tableau de données ARRAY </h2>';
/*
un tableau est déclaré un peu comme une variable amélkiorée, car on ne conserve pas qu'une valeur mais un ensemeble de valeur
*/

$liste = array("grégory", "nathalie", "emilie", "françois", "georges");
//echo $liste; // Ne fonctionne pas, on ne peut pas passer par un echo classique pour voir le contenu de notre tableau ARRAY

echo '<pre>'; var_dump($liste); echo '</pre>';

echo '<pre>'; print_r($liste); echo '</pre>';// print_r est une instruction d'affichage améliorée tout comme var_dump, elle est juste moins détaillée

// contexte : bien souvent, lorsque l'on recuperera des informations en BDD, nous les retrouverons sous forme d'ARRAY

//----------------------------------------------------------------
echo '<hr><h2>Boucle foreach pour les tableaux de données ARRAY</h2>';

$tab[] = "France";
$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Angleterre";
$tab[] = "Suisse";
$tab[] = "Portugal";// autre moyen d'affecter une valeur dans un tableau . Nous ne mettons pas le mot ARRAY mais les crochets[]

echo '<pre>'; print_r($tab); echo '</pre>';

// Exercice : tenter de sortir et d'afficher "Italie" en passant par le tableau ARRAY sans faire un echo "Italie"
echo $tab[1];

echo '<hr>';
// la boucle foreach est un moyen simple de passer en revue un tableau. Foreach fonctionne uniquements sur les tableaux, elle retournera une erreur si vous tentez de l'utiliser sur une variable d'un autre type.
foreach($tab as $info)// le mot as fait partie du langage et est obligatoire
{
	echo $info . '<br>'; // on affiche successivement les éléments du tableau
}

echo '<hr>';
foreach($tab as $indices => $valeur) // quand il y a 2 variables, la 1ère parcours la colonne des indicces et la seconde parcours la colonne des valeurs
{
	echo $indices . ' : ' . $valeur . '<br>'; // on affiche l'élelement du tableau parcouru  via $indice et $valeur
}
echo '<hr>';
$couleur = array("j" => "jaune", "v" => "vert", "r" => "rouge", "o" => "orange"); // nous pouvons choisir les indices

echo '<pre>'; print_r($couleur); echo '</pre>';

echo 'Taille du tableau : ' . count($couleur) . "<br>"; // affiche 4
echo 'Taille du tableau : ' . sizeof($couleur) . "<br>"; // sizeof est pareil que count et renvoie la taille du tableau. ce sont des fonctions prédéfinies en PHP
echo '<hr>';
echo implode("-", $couleur) . "<br>"; // implode() est une fonction prédéfinie qui permet de rassembler les éléments d'un tableau en un chaine (séparé par un symbole)

//--------------------------------------------------------------------
echo '<hr><h2> Tableau multidimensionnel </h2>';
// Nous parlons de tableau multidimansionnel quand un tableau est contenu dans un autre tableau
$tab_multi = array(0 => array("prenom" => "Grégory", "nom" => "Lacroix"),
					1 => array("prenom" => "Julien", "nom" => "Cottet"));
// il est possible de choisir le nom des indices d'un array
echo '<pre>'; print_r($tab_multi); echo '</pre>';

// Exercice : tenter de sortir et d'afficher le "Cottet" du tableau multidimensionnel sans faire un echo 'Cottet'

echo $tab_multi[1]["nom"]; // nous rentrons d'abord à l'indice "1" pour allez ensuite dans l'autre tableau à l'indice "nom"

echo '<hr><h2> Les superglobales </h2>';
/*
Les superglobales sont des variables array, internes et prédéfinies par PHP, qui sont toujours disponibles, quel que soit le contexte.

Pour rappel, une variable array permet de conserver un ensemble de valeurs.

Lorsqu'on parle de disponibilité, on exprime le fait que les superglobales sont à la fois disponibles dans l'espace global(espace par défault de php) mais aussi dans l'espace local(dans une fonction)

$_GET -> contient les informations fournies en paramètre via la method GET par l'URL
$_POST -> contient les informations fournies par un formulaire via la methode POST
$_SERVER -> contient toute les informations fournie par le serveur web
$_FILES -> contient les informations liées à l'upload d'un (ou plusieurs) fichier par un formulaire
$_COOKIE -> contient les informations fournies par le fichier cookie
$_SESSION -> contient les informations de la session en cours
*/
echo '<pre>'; print_r($_SERVER); echo '</pre>';
echo '<hr>';

//--------------------------------------------------------------------
echo '<hr><h2> Objets </h2>';
// un objet est un autre type de données.  Un peu à la manière d'un ARRAY, il permet de regrouper des informations.
// Cependant, cela va beaucoup plus loin car on peux y déclaré des variables mais aussi des fonctions.

class Etudiant
{
	public $prenom = 'Grégory'; // public permet de préciser que l'élément sera accéssible de partout (il y a aussi protected et private)
	public $age = 25;
	public function pays()
	{
		return "France";
	}
}

$objet = new Etudiant();// new est un mot clé permettant d'instancier la classe et d'en faire un objet.

echo '<pre>'; print_r($objet); echo '</pre>';

echo $objet->prenom . "<br>"; // nous pouvons piocher dans un ARRAY avec les crochets [], nous devons piocher dans un OBJET avec une fleche ->
echo $objet->age . "<br>";
echo $objet->pays() . "<br>"; // appel d'une méthode toujours avec des paranthèses
