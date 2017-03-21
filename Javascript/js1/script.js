// // EXERCICE
//
// /*
// AFFICHER DANS LA PAGE :
// Je m'appelle [prenom] et j'ai [age] ans
//
// 1/ Declarer les variable prenom et age (avec le mot-clé var on donne un nom à notre variable)
//
// 2/ affecter des valeurs à ses variable (avec le signe = suivi de la valeur
//
// 3/ Afficher la phrase dans la page en JS(utiliser la concaténation +)
//
// */
//
// var prenom = window.prompt('votre prenom ?');
// var age = window.prompt('votre age ?');
// document.write("je m'appelle" + prenom + "et j'ai" + age + "ans");
//
//
// // EXERCICE 2 : Calculatrice
// /*
// Demander un nombre 1 à l'utilisateur (utiliser window.prompt)
// Demander un nombre 2 à l'utilisateur (utiliser window.prompt)
// Afficher le résultat de l'addition avec la phrase :
// ex : Le résultat de l'addition est ...
//
//
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/parseInt
// */
// var prenom = window.prompt('Votre prénom');
//
// var chiffre1 = window.prompt('votre nombre ?')
// var chiffre2 = window.prompt('votre nombre ?')
// document.write(parseFloat(chiffre1) + parseFloat(chiffre2));


var montant_ht = window.prompt('Votre montant_ht ?');
const TVA = (20/100) * montant_ht;
const TTC = parseFloat(montant_ht)+ TVA;
document.write('votre montant HT est de ' + montant_ht + ' il y a ' + TVA + ' de TVA et le montant TTC est de ' + TTC);
