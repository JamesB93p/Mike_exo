var voiture = {
    marque : "Mercedes-Benz Classe M",
    annee_de_fabrication : "1997",
    date_achat : "1997 à 2015",
    passager1 : "James",
    passager2 : "Kos-sf"
}

document.write('<ul>');
document.write('<li>Marque: ' + voiture.marque + '</li>');
document.write('<li>Année de fabrication: ' + voiture.annee_de_fabrication + '</li>');
document.write('<li>Date de l\'achat: ' + voiture.date_achat + '</li>');
document.write('<li>Passager1: ' + voiture.passager1 + '</li>');
document.write('<li>Passager2: ' + voiture.passager2 + '</li>');
document.write('</ul>');











const TAUX_TVA = 20.0;
var demandeRemise;
var montant_ht;
var montant_ttc;
var montant_tva;
var pourcentage_remise;

montant_ht = window.prompt('Quel est le montant HT ?');
montant_ht = parseFloat(montant_ht);

demande_remise = window.prompt('Souhaitez-vous une remise ?');

if(demande_remise == "oui") {
    pourcentage_remise = window.prompt('entrée une remise en % ');
    pourcentage_remise = parseFloat(pourcentage_remise);
    montant_ht = montant_ht - (montant_ht * pourcentage_remise / 100);
    montant_tva = TAUX_TVA / 100 * montant_ht;
    montant_ttc = montant_ht + montant_tva;
    document.write("Le montant TTC est de " + montant_ttc + "<br />");
    document.write(" Il y a une remise de " + pourcentage_remise + '%');
}
else {
    alert("non")
}

































var nombre1;
var nombre2;
var operation;
var resultat;


nombre1   = parseFloat(window.prompt('Saisissez un premier nombre :'));
nombre2   = parseFloat(window.prompt('Saisissez un deuxième nombre :'));
operation = window.prompt('Quelle opération mathématique souhaitez-vous effectuer ?');


switch(operation)
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
