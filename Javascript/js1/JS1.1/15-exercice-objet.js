'use strict';   // Mode strict du JavaScript

// Déclaration d'une variable.
var maVoiture;


// Affectation d'un objet vide à la variable.
maVoiture = new Object();   // syntaxe longue.

// La syntaxe raccourcie est : maVoiture = {};


// Création de propriétés dans l'objet.
maVoiture.marque       = 'Alfa Roméo';
maVoiture.annee        = 2012;
maVoiture.dateAchat    = new Date('2013-06-20');
maVoiture.passagers    = new Array();
maVoiture.passagers[0] = 'Nicolas';
maVoiture.passagers[1] = 'Charlotte';

/*
 * Les lignes de code ci-dessus peuvent également être écrites comme ceci :
 *
 * maVoiture =
 * {
 *     marque    : 'Alfa Roméo',
 *     annee     : 2012,
 *     dateAchat : new Date('2013-06-20'),
 *     passagers : [ 'Nicolas', 'Charlotte' ]
 * };
 */


// Affichage du contenu de l'objet directement dans la page HTML.
document.write('<strong>Informations sur la voiture :</strong>');
document.write('<ul>');

document.write('<li>Marque : ' + maVoiture.marque + '</li>');
document.write('<li>Année de fabrication : ' + maVoiture.annee + '</li>');

/*
 * Utilisation de la méthode toDateString() des objets de la classe Date
 * afin d'obtenir une chaîne de caractères avec une date lisible.
 */
document.write("<li>Date de l'achat : " + maVoiture.dateAchat.toDateString() + '</li>');

// maVoiture est un objet qui contient une propriété dateAchat qui est un objet de la classe Date.

document.write('<li>Passager 1 : ' + maVoiture.passagers[0] + '</li>');
document.write('<li>Passager 2 : ' + maVoiture.passagers[1] + '</li>');

document.write('</ul>');