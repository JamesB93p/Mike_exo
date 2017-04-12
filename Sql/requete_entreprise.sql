CREATE DATABASE nom_de_la_base; -- Cr�er une nouvelle Base de donn�es

SHOW DATABASES; -- permet de voir les bases de donn�es

USE nom_de_la_base; -- selectionner et utiliser la base de donn�es

DROP DATABASE nom_de_la_base; -- supprimer une base de donn�es

DROP table nom_de_la_table; -- supprimer une table

TRUNCATE nom_de_la_table; -- vider la table

--------------------------------------------------------
-- REQUETE DE SELECTION

-- AFFICHAGE COMPLET
SELECT id_employes, prenom, nom, sexe, service, date_embauche, salaire FROM employes;

SELECT * FROM employes; -- affichage de la table employes avec le raccourci de l'�toile "*" pour dire "ALL"
-- affiche-moi [* toutes les colonnes] de [la table employes]

-----------------------------------------------------------------

-- Quels sont les noms et prenom des employes travaillant dans l'entreprise ?
SELECT nom, prenom FROM employes;

-----------------------------------------------------------------

-- Quels sont les diff�rents service occup�e par les employ�s travaillant dans l'entreprise ?
SELECT service FROM employes;

----------------------------------------------------------------
-- DISTINCT
-- Affichage des services diff�rents
SELECT DISTINCT service FROM employes;
-- DISTINCT permet d'�liminer les doublons

----------------------------------------------------------------
-- Condition WHERE
-- Affichage des employes du service informatique
SELECT nom, prenom, service FROM employes WHERE service = 'informatique';
-- WHERE = � condition que
-- WHERE [colonne = valeur]

----------------------------------------------------------------
-- BETWEEN
-- Affichage des employes ayant �t� recrut�s entre 2010 et aujourd'hui
SELECT nom, prenom, date_embauche FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2017-04-11';

SELECT CURDATE(); -- affiche la date du jour
SELECT NOW(); -- affiche la date du jour

SELECT nom, prenom, date_embauche FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND CURDATE();
-- BETWEEN + AND = entre ... et ...
-- Pas de difference entre les quotes ' et les guillemets ". Quand il y a une valeur il faut mettre les guillemets " ou les quotes ', en revanche quand il s'agit d'un chiffre, on ne doit pas les mettre

-----------------------------------------------------------------
-- LIKE : valeur approchante
-- Affichage des employes ayant un prenom commen�ant par la lettre 's'
SELECT prenom FROM employes WHERE prenom LIKE 's%'; -- Je souhaite connaitre le prenom des personnes commen�ant par la lettre "s"

SELECT prenom FROM employes WHERE prenom LIKE '%s'; -- Je souhaite connaitre le prenom des personnes finissant par la lettre "s"

SELECT prenom FROM employes WHERE prenom LIKE '%-%'; -- Je souhaite connaitre le prenom des personnes de l'entreprise qui contient un trait d'union dans leur pr�nom

-- % : peut importe la suite...

-- ID ---- nom ---- code_postal
-- 1 	Appart1 	75015
-- 2 	Appart2 	75011
-- 3	Appart3 	75016
-- 4	Appart4 	95000

-- SELECT * FROM appartement WHERE code_postal = 75;
-- SELECT * FROM appartement WHERE code_postal LIKE '75%';

------------------------------------------------------------------
-- Affichage de tous les employes (sauf les informaticiens)
SELECT * FROM employes WHERE service != 'informatique'; -- Je souhaite connaitre le nom et pr�nom de tous les employes de l'entreprise NE travaillant PAS dans le service informatique
-- != diff�rent de ...

-- OPERATEURS DE COMPARAISON
-- = 	"est �gal"
-- > 	"strictement sup�rieur"
-- < 	"strictement inf�rieur"
-- >= 	"inf�rieur ou �gal �"
-- <= 	"sup�rieur ou �gal �"
-- <> ou != 	"diff�rent de"

--------------------------------------------------------------------
-- Afficher le nom, prenom, service et salaire des employes de l'entreprise ayant un salaire sup�rieur � 3000�
SELECT nom, prenom, service, salaire FROM employes WHERE salaire > 3000;

--------------------------------------------------------------------
-- ORDER BY
-- Affichage des employes dans l'ordre alphab�tique
SELECT prenom FROM employes ORDER BY prenom ASC;
SELECT prenom FROM employes ORDER BY prenom;
SELECT prenom FROM employes ORDER BY prenom DESC;
SELECT prenom, salaire FROM employes ORDER BY salaire DESC;
-- ORDER BY permet d'effectuer un classement
-- ASC : Ascendant croissant
-- DESC : Descendant d�croissant

---------------------------------------------------------------------
-- LIMIT
-- Affichage des employes 3 par 3
SELECT prenom, nom FROM employes ORDER BY prenom LIMIT 0,3;
-- LIMIT 0,3 : 0 est la position de d�part de mon tableau et 3 est le nombre d'employ�s que je souhaite afficher

---------------------------------------------------------------------
-- Affichage des employes avec un salaire annuel
SELECT prenom, salaire*12 FROM employes;
SELECT prenom, salaire*12 AS 'Salaire annuel' FROM employes;
-- AS : Alias

---------------------------------------------------------------------
-- SUM
-- Affichage de la "masse salariale" sur 12 mois
SELECT SUM(salaire*12) AS 'masse salariale sur 1 ann�e' FROM employes;
-- SUM : Somme

---------------------------------------------------------------------
-- AVG
-- affichage du salaire moyen
SELECT AVG(salaire) AS 'Salaire moyen' FROM employes;
-- AVG : moyenne
-- ROUND
SELECT ROUND(AVG(salaire)) AS 'Salaire moyen' FROM employes;
SELECT ROUND(AVG(salaire),2) AS 'Salaire moyen' FROM employes;
-- ROUND permet d'arrondir ROUND(...,2) le 2 permet d'afficher un chiffre arrondi � 2 chiffres apr�s la virgule

---------------------------------------------------------------------
-- COUNT
-- Affichage du nombre de femme(s) travaillant dans l'entreprise
SELECT COUNT(*) AS 'Nombre de femmes' FROM employes WHERE sexe = 'f';
-- COUNT permet de compter

---------------------------------------------------------------------
-- MIN / MAX
-- Affichage du salaire minimum / maximum
SELECT MIN(salaire) FROM employes;
SELECT MAX(salaire) FROM employes;

-- Exercice : Afficher le prenom et le salaire de l'employes ayant le salaire le plus petit
SELECT prenom, MIN(salaire) FROM employes;

SELECT prenom, salaire FROM employes WHERE salaire = (SELECT MIN(salaire) FROM employes);
-- requete d�taill�e :
SELECT prenom, salaire FROM employes WHERE salaire = 1390;
SELECT * FROM employes WHERE salaire = 1390;
SELECT prenom, salaire FROM employes ORDER BY salaire LIMIT 0,1;

--------------------------------------------------------------------
-- IN
-- Je souhaite connaitre le pr�nom des employes travaillant dans le service comptabilit� et le service informatique
SELECT prenom, service FROM employes WHERE service IN('informatique','comptabilite');
-- IN permet de selctionner plusieurs valeurs
-- = permet de selectionner une seule valeur

---------------------------------------------------------------------
-- NOT
-- Je souhaite connaitre le pr�nom des employes ne travaillant pas dans les services informatique et comptabilit�
SELECT prenom, service FROM employes WHERE service NOT IN('informatique','comptabilite');

-- A l'inverse, pour connaitre le pr�nom des employes ne faisant pas partie des services comptabilit� et informatique, class� par service
SELECT prenom, nom, service FROM employes WHERE service NOT IN('informatique','comptabilite') ORDER BY service;

---------------------------------------------------------------------
-- Exercice : Je souhaite connaitre le prenom et le nom des employes du service commercial avec un salaire inf�rieur ou �gal � 2000�
SELECT prenom, nom, salaire FROM employes WHERE service = 'commercial' AND salaire <= 2000;
-- AND : et... (condition suppl�mentaire)

----------------------------------------------------------------------
-- OR
-- Exercice : Je souhaite connaitre le pr�nom et noms des employ�s du service commercial pour un salaire de 1900 ou 2300
SELECT prenom, nom, salaire FROM employes WHERE service = 'commercial' AND (salaire = 1900 OR salaire = 2300);

---------------------------------------------------------------------
-- GROUP BY
-- Affichage du nombre d'employ�s par service
SELECT service, COUNT(*) AS 'nombre' FROM employes GROUP BY service;
-- GROUP BY permet d'effectuer des regroupements

---------------------------------------------------------------------
-- REQUETE D'INSERTION
-- ID auto incr�ment� :
INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire)VALUES('Gr�gory', 'Lacroix', 'm', 'informatique', '2017-01-01', '10000');
-- Insertion avec choix de l'ID :
INSERT INTO employes(id_employes, prenom, nom, sexe, service, date_embauche, salaire)VALUES(877,'Gr�gory', 'Lacroix', 'm', 'informatique', '2017-01-01', '10000');

----------------------------------------------------------------------
-- REQUETE DE MODIFICATION
UPDATE employes SET salaire = 1100, service = 'nettoyage' WHERE  id_employes = 350;

REPLACE INTO employes(id_employes, prenom, nom, sexe, service, date_embauche, salaire)VALUES(592, 'Laura', 'Blanchet', 'm', 'cuisine', '2017-01-01', 1100); -- Si l'ID n'est pas trouv�, REPLACE se comporte comme un INSERT sinon il se comporte comme un UPDATE

SELECT * FROM employes; -- on observe le contenu de la table apr�s les modifications

----------------------------------------------------------------------
-- REQUETE DE SUPPRESSION
DELETE FROM employes WHERE prenom = 'Jean-pierre'; -- suppression de l'employ� ayant le pr�nom "Jean-Pierre"
DELETE FROM employes WHERE id_employes = 350; -- suppression de l'employ� ayant l'ID 350

-- Supprimer tout les informaticiens sauf id_employes 701
DELETE FROM employes WHERE service = 'informatique' AND id_employes != 701;

----------------------------------------------------------------------

-- EXERCICE :
-- 1. Afficher la profession de l'employé 547
SELECT service FROM employes WHERE id_employes = 547;
-- 2. Afficher la date d'embauche d'Amandine
SELECT date_embauche FROM employes WHERE prenom = 'amandine';
-- 3. Afficher le nom de famille de Guillaume
SELECT nom FROM employes WHERE prenom = 'Guillaume';
-- 4. Afficher le nombre d'employés ayant un n°id employes commencant par le chiffre 5
SELECT COUNT(id_employes) FROM employes WHERE id_employes LIKE '5%';
-- 5. Afficher le nombre de commerciaux
SELECT COUNT(service) FROM employes WHERE service = 'commercial';
-- 6. Afficher le salaire moyen des informaticiens (+ arrondi)
SELECT ROUND(AVG(salaire),1) AS 'Salaire moyen' FROM employes WHERE service = 'informatique';
-- 7. Afficher les 5 premiers employes aprés avoir classé leur noms de famille par ordre alphabétique
SELECT nom FROM employes ORDER BY nom ASC LIMIT 0,5;
-- 8. Afficher le cout des commerciaux sur une année
SELECT SUM(salaire*12) AS'cout des commerciaux sur 1 année' FROM employes WHERE service = 'commercial';
-- 9. Afficher le salaire moyen par service (service + salaire moyen)
SELECT service, AVG(salaire) AS 'Salaire moyen' FROM employes GROUP BY service;
-- 10. Afficher le nombre de recrutement sur l'anne 2010 (+ alias)
SELECT COUNT(date_embauche) AS 'recrutement sur l\'année 2010' FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';
SELECT COUNT(date_embauche) AS 'recrutement sur l\'année 2010' FROM employes WHERE date_embauche LIKE '2010%';
-- 11. Afficher le salaire moyen appliqué lors des recrutements sur la période allant de 2005 à 2007
SELECT ROUND(AVG(salaire),2) AS 'Salaire moyen recrutement 2005-2007' FROM employes WHERE date_embauche BETWEEN '2005-01-01' AND '2007-12-31';
-- 12. afficher le nombre de service différent
SELECT COUNT(DISTINCT(service)) AS 'Nombre de service' FROM employes;
-- 13. Afficher tous les employes (sauf ceux du service production et secrétariat)
SELECT prenom, nom, service FROM employes WHERE service NOT IN ('production','secrétariat');
-- 14. Afficher conjoitement le nombre d'homme et de femme dans l'entreprise
SELECT sexe, COUNT(sexe) AS'Nombre de femme et d\'homme' FROM employes GROUP BY sexe;
-- 15. Afficher les commerciaux ayant été recruté avant 2005 de sexe masculin et gagnant un salaire supérieur à 2500€
SELECT nom, prenom FROM employes WHERE service = 'commercial' AND date_embauche < '2005-01-01' AND sexe ='m' AND salaire > 2500;
-- 16. Qui a été embauché en dernier?
SELECT * FROM employes WHERE date_embauche = (SELECT MAX(date_embauche) FROM employes);
SELECT * FROM employes ORDER BY date_embauche DESC LIMIT 0,1;
-- 17. Afficher les informations sur l'employé du service commercial gagnant le salaire le plus élevé
SELECT * FROM employes WHERE service = 'commercial' AND salaire = (SELECT MAX(salaire) FROM employes WHERE service = 'commercial');
-- 18. Afficher le prénom de l'informaticien gagnant le meilleur salaire
SELECT prenom, nom, salaire FROM employes WHERE service = 'informatique' ORDER BY salaire DESC LIMIT 0,1;
SELECT prenom, nom, salaire FROM employes WHERE service = 'informatique' AND salaire = (SELECT MAX(salaire) FROM employes WHERE service = 'informatique');
-- 19. Afficher le prenom de l'informaticien ayant été recruté en premiers
SELECT prenom FROM employes WHERE service = 'informatique' AND date_embauche = (SELECT MIN(date_embauche) FROM employes WHERE service = 'informatique');
-- 20. Augmenter chaque employé de 100€
UPDATE employes SET salaire = salaire + 100;
-- 21. Supprimer les employés du service commercial
DELETE FROM employes WHERE service ='commercial';
-- 22. Donner le salaire et le nom des employes gagnant plus que tous les commerciaux
SELECT prenom, nom, salaire FROM employes WHERE salaire > (SELECT MAX(salaire) FROM employes WHERE service = 'commercial');
-- 23. Combien y a t il de commerciaux gagnant un salaire inférieur ou avoisinant les 1500€
SELECT COUNT(*) FROM employes WHERE service = 'commercial' AND salaire <= 1500;
