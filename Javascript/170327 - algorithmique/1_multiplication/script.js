// sharemycode.fr/v6f
// ## Enoncé
//
// Construire une table des multiplications dans une variable puis afficher en HTML le contenu de cette variable.
//
// ## Remarques
//
// * Pour rappel, une boucle permet d'initialiser un tableau...
// * Utiliser un tableau HTML pour construire l'affichage
// * Au moment de l'affichage HTML, lorsque le nombre est multiplié par lui-même (1x1, 2x2, 3x3, etc.) la cellule du tableau doit s'afficher d'une autre couleur que les autres cellules; **la solution doit être en CSS**.

document.write('<hr />');
document.write('<table>');
for (var i = 1; i <= 9; i++) {
    document.write('<tr>');
    for (var cell = 1; cell <= 9; cell++) {
        res = i * cell;
        console.log(res);
        if (cell == i) {
            document.write('<td class="same-nb">' + res + '</td>');
        }else {
            document.write('<td>' + res + '</td>');
        }
    }
    document.write('</tr>');
}
document.write('</table>');

// Même exercice mais en invitant l'utilisateur à saisir le nombre de lignes qu'il veutcell
var multiply = parseInt(window.prompt('Nombre de lignes :'));
document.write('<hr />');
document.write('<table>');
for (var i = 1; i <= multiply; i++) {
    document.write('<tr>');
    for (var cell = 1; cell <= multiply; cell++) {
        res = i * cell;
        console.log(res);
        if (cell == i) {
            document.write('<td class="same-nb">' + res + '</td>');
        }else {
            document.write('<td>' + res + '</td>');
        }
    }
    document.write('</tr>');
}
document.write('</table>');

//==========FRED - Avec un teblaeu multi-diùensionnel en variable ==========//
'use strict';   // Mode strict du JavaScript

// Déclaration de quatre variables.
var colonne;// les cellules
var ligne;
var taille;
var tableMultiplications;

// Demande la taille maximum de la table des multiplications.
taille = parseInt(window.prompt('Taille de la table de multiplications ?'));

// Initialisation de la table des multiplications.
tableMultiplications = [];

// 1 Construction de la table dans une variable table Multiplications
for(ligne = 1; ligne <= taille; ligne++)
{
    // Pour chaque nouvelle ligne il faut créer un nouveau tableau.
    tableMultiplications[ligne] = new Array();

    for(colonne = 1; colonne <= taille; colonne++)
    {
        // Stockage du résultat du calcul dans la table des multiplications.
        tableMultiplications[ligne][colonne] = ligne * colonne;
    }
}

// 2 Construction en HTML de la table des multiplications.
document.write('<table>');

for(ligne = 1; ligne <= taille; ligne++)
{
    document.write('<tr>');

    for(colonne = 1; colonne <= taille; colonne++)
    {
        // Si les deux nombres multipliés sont les mêmes...
        if(ligne == colonne)
        {
            // ...Alors on applique une classe CSS à la cellule.
            document.write('<td class="same-number">');
        }
        else
        {
            document.write('<td>');
        }
        document.write(tableMultiplications[ligne][colonne]);

        document.write('</td>');
    }
    document.write('</tr>');
}
document.write('</table>');
