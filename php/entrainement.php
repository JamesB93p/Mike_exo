<style>h2{margin: 0; font-size: 15px; color: red;}</style>
<h2>Ecriture et affichage</h2> <!-- Nous pouvons ecrire du HTML dans un fichier ayant l'extension PHP, l'inverse n'est pas possible -->
<?php echo 'Bonjour'; // echo est une instruction d'affichage, nous pouvons le traduire par "affiche moi"
echo '<br>'; // Nous pouvons egalement y mettre du HTML
echo 'Bienvenue'; // Si vous vous rendez dans le code source, vous ne verrez pas le PHP car le langage est interpété.

echo '<hr><h2> Commentaire </h2>';
?>
<strong>Bonjour</strong> <!-- nous voyons qu'il est egalement possible de fermer et ré-ouvrir php pour melanger du code PHP&HTML -->
<?php
echo '<br>';
echo 'Texte'; // ceci est un commentaire sur une seue ligne
echo 'Texte'; /* ceci est un commentaire sur plusieurs lignes */
echo '<br>';
print 'nous sommes mardi'; // print est une autre instruction d'affichage. il n'y a pas de difference avec "echo"
 //--------------------------------------------------------------------------------------------------------------

 echo '<hr><h2>Variables : types / declaration / affectation</h2>'; // une variable est un espace nommé permettant de conserver une valeur
// déclaration d'une variable toujours avec le signe $ suivi de son nom
// jamais d'accent et d'espace et jamais de chiffre apres
// $2a -> mauvaise synthaxe - $a2 -> bonne synthaxe
// c'est nous qui definissons le nom de la variable
 $a = 127; // affectation de la valeur 127 dans la variable nommé "a"
 echo gettype($a); // gettype est une fonction predefinie nous permettant de voir le type d'une variable. il s'agit d'un entier : integer
 echo '<br>';
 $b = 1.5;
 echo gettype($b); // un nombre a virgule : double
 echo '<br>';
 $c = 'une chaine';
 echo gettype($c); // la non plus, nous ne regardons pas le contenu d'une variable mais son type : string
 echo '<br>';
 $d = '127';
 echo gettype($d); // string;, entre quote l'interpreteur traduit que c'est une chaine de caracteres
 echo '<br>';
 $e = true;
 echo gettype($e); // boolean
 echo '<br>';
 $f = false;
 echo gettype($f); // boolean

 echo '<hr><h2>Concatenation</h2>';
 $x = 'Bonjour';
 $y = 'Tout le monde';
 echo $x . $y . '<br>'; // point de concatenation que l'on peux traduire par "suivi de"
 echo "$x $y"; // meme chose sans concatenation, entre guillemets les variables sont évaluées
 echo 'Hey !' . $x . $y; //concatenation texte et variable
 echo '<br>', 'coucou', '<br>'; // concatenation avec une virgule (la virgule et le point de concatenation sont similaire)

 //-------------------------------------------------------------------------------------------------------------------------------

 echo '<hr><h2> Concaténation lors de l\'affectation</h2>';
 $prenom1 = 'Bruno';
 $prenom1 = 'Claire ';
 echo $prenom1; // affectation de la valeur "Claire" sur la variable $prenom1
 echo $prenom1 . '<br>'; // affiche "Claire", cela remplace "Bruno" par "Claire"

 $prenom2 = "Nicolas "; // affectation de la valeur "Nicolas" sur la variable $prenom2
 $prenom2 .= "Marie"; // affectation de la valeur "Marie" sur la variable $prenom2
 echo $prenom2 . '<br>'; // affiche "Nicolas Marie" ... cela ajoute SANS remplacer la valeur précédente grace à l'opérateur .=

 //--------------------------------------------------------------------------------------------------------------------------

 echo '<hr><h2>Guillemets et Quotes</h2>';
 $message = "ajourd'hui";
 $message = 'aujourd\'hui';
 $txt = 'Bonjour';
 echo $txt . ' tout le monde' . '<br>'; // concatenation
 echo " $txt tout le monde <br>"; // affichage des guillemets, la variable est evaluee
 echo ' $txt tout le monde'; // affichage dans des quotes, la variable n'est pas evaluee

 //----------------------------------------------------------------------------------------------------------------------------

echo '<hr><h2>Constante et constante magique</h2>'; // une constante tout comme une variable permet de conserver une valeur sauf que comme son som l'indique, la valeur est... constante! c'est à dire que l'on ne pourra pas la changer durant l'execution du script. contrairement a une variable qui elle peut... varier!
define("CAPITALE", "PARIS"); // par convention, une constante se declare toujours en majuscule
echo CAPITALE . "<br>"; // affichage du contenu de la constante CAPITALE : Paris

// Constante magique
echo __FILE__ . "<br>"; // chemin complet vers le fichier
echo __LINE__ . "<br>"; // affiche le numeros de la ligne

//-----------------------------------------------------------------------------------------------------------------------------------

// EXERCICE : afficher BLEU-BLANC-ROUGE (avec les tirets) en mettant chaque couleur dans une variable

echo $a = 'bleu -';
echo $b = 'blanc -';
echo $c = 'rouge';

//-------------------------------------------------------------------------------------------------------------------------------------

echo '<hr><h2>Operateur arithmetique</h2>';
$a = 10;
$b = 2;
echo $a + $b . '<br>'; // affiche 12
echo $a - $b . '<br>'; // affiche 8
echo $a * $b . '<br>'; // affiche 20
echo $a / $b . '<br>'; //affiche 5

// operation / affectation

$a = 10;
$b = 2;
$a += $b; // equivault à $a = $a + $b
echo $a . '<br>'; // affiche 12

$a -= $b; // equivault à $a = $a - $b
echo $a . '<br>'; // affiche 10

$a *= $b; // equivault à $a = $a * $b
echo $a . '<br>'; // affiche 20

$a /= $b; // equivault à $a = $a / $b
echo $a . '<br>'; // affiche 10
// contexte : pratique pour faire des calculs sur un panier...

//------------------------------------------------------------------------------------------------------------------------------------

echo '<hr><h2>Structure conditionnelles (if/else) - operateur de comparaison</h2>';

/*
Operateur             signification
=                     est egale
==                    comparaison de la valeur
===                   comparaison de la valeur et du type
!=                    different de
!                     n'est pas
>                     strictement superieur
<                     strictement inferieur
<=                    inferieur ou egale a
>=                    superieur ou egale a
&& / AND              et
|| / OR               ou
XOR                   ou exclusif
*/

// isset & empty
// isset test si c'est définie ----- empty test si c'est vide
$var1 = false;
$var2 = ""; // chaine vide
// difference entre empty et isset : si on met la var2 en commentaire, on ne passe plus dans le if isset, mais on continue de rentrer dans le if empty

if(empty($var1))
{
    echo '0, vide ou non definie <br>'; // empty : test si c'est à 0, vide ou non definie
}

if(isset($var2))
{
    echo 'var2 existe et est definie par rien <br>'; // isset : test l'existance d'une variable
}

//--------------------------------------------------------------------------------------------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

if($a > $b)
{
    echo "A est bien superieur a B <br>"; // instruction d'affichage
}
else { // sinn cas par default
    echo "non c'est B qui est superieur a A <br>";
}

//-------------------------------------------------------------------------------------------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

if($a > $b && $b > $c) // si'a' est superieur à 'b' et que 'b' est superieur à 'c'
{
    echo "OK pour les 2 conditions <br>"; // instruction d'affichage
}
if($a == 9 || $b > $c) // si la valeur de 'a' est egale a 9 ou que 'b' est superieur a 'c', le double = permet de comparé la valeur a l'interieur de la variable
{
    echo "OK pour au moins l'une des 2 conditions <br>"; // instruction d'affichage
}
else { // (sinon) cas par default
    echo "Nous sommes dans le else";
}

//--------------------------------------------------------------------------------------------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

if($a == 8) // si la valeur de A est egale a 8
{
    echo "1 - A est egale à 10 <br>"; // instruction d'affichage
}
elseif($a != 10) // sinon SI A est different de 10
{
    echo "2 - A est egale a 5 <br>"; // instruction d'affichage
}
else { // sinon cas par default
    echo "3 - tout le monde a faux <br>";
}

// Avec des elseif, si la condition est respecté, le script s'arrete et les conditions suivantes ne sont pas évaluées, au contraire en posant plusieurs condition if, elles seront toute evaluee meme si les conditions precedente sont respectees.

// Condition exclusive

if($a == 10 XOR $b == 6) // XOR : seulement l'une des 2 conditions doit etre valide
{
    echo 'OK condition exclusive <br>'; // si les 2 conditions sont bonne ou mauvaises, nous ne rentrons pas ici
}
else{
    echo "les deux conditions sont soient bonne ou mauvaise";
}

//-----------------------------------------------------------------------------------------------------------------------------------

// Forme contractee : 2eme possibilité d'ecriture des if

echo ($a == 10) ? "A est egale a 10 <br>" : "A n'est pas egale a 10 <br>";
//Le ? remplace le if -- les : remplace le else

//------------------------------------------------------------------------------------------------------------------------------------

 // comparaison

 $vara = 1;
 $varb = "1";
 echo gettype($vara) . '<br>';
 echo gettype($varb) . '<br>';
 if($vara === $varb)
 {
     echo "il s'agit de la meme chose";
 }
// avec la presence, le triple egale , le test ne fonctionne pas car les types des variables sont differents. INT(entier) n'est pas egale a STRING (chaine de caractere)
// affectation
// == comparaison de la valeur
// === comparaison de la valeur et du type

//------------------------------------------------------------------------------------------------------------------------------

echo '<hr><h2>Condition SWITCH</h2>';
// les 'cases' represente des cas differents dans lesquel nous pouvons potentiellement tomber
// le 'break' permet d'interrompre le script si nous rentrons dans un des cas
// si l'on a un certains nombres de cas a comparer; il serait interessant d'utiliser la condition switch
$couleur = 'jaune';
switch ($couleur)
{
    case 'bleu':
    echo "vous aimez le bleu <br>";
    break;

    case 'rouge':
    echo "vous aimez le rouge <br>";
    break;

    case 'vert':
    echo "vous aimez le vert <br>";
    break;

    default: // cas par default, si l'on ne rentre pas dans les cas precedent
    echo "vous n'aimez ni le bleu, ni le rouge, ni le vert <br>";
    break;
}

//-------------------------------------------------------------------------------------------------------------------------

// EXERCICE : Pouvez vous faire la meme condition switch avec des if/else ? est-ce possible ?

$couleur = 'jaune';
if($couleur == 'bleu')
{
    echo "vous aimez le bleu <br>";
}
elseif($couleur == 'rouge' )
{
    echo "vous aimez le rouge <br>";
}
elseif($couleur == 'vert' )
{
    echo "vous aimez le vert <br>";
}
else
{
    echo "vous n'aimez ni le bleu, ni le rouge, ni le vert <br>";
}

//-------------------------------------------------------------------------------------------------------------------------

echo "<hr><h2>Structure iterative : boucle</h2>";

$i = 0; // valeur de depart
while($i < 3) // tant que $i est inferieur a 3
{
    echo" $i---";
    $i++; // ceci est une forme contractée de : $i = $i + 1
}
echo "<br>";

// EXERCICE : faites en sorte de ne pas avoir lestirets a la fin : 0---1---2

$i = 0;
while($i < 3){
    if($i ==2)
    {
        echo $i;
    }
    else{
        echo "$i---";
    }
    $i++;
}
