const TAUX_DE_TVA = 20.0;

var monMontantHT;
var monMontantTTC;
var monMontantTVA;

monMontantHT = window.prompt('Quel est le montant HT ?');
monMontantHT = parseFloat(monMontantHT);

monMontantTVA = monMontantHT * TAUX_DE_TVA / 100;
monMontantTTC = monMontantHT + monMontantTVA;

document.write('<p>Pour un montant HT de ' + monMontantHT + ' € il y a ' + monMontantTVA + ' € de TVA.</p>');
document.write('<p>Le montant TTC est donc de ' + monMontantTTC + ' €.</p>');
