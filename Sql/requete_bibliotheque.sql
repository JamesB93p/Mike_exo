-- Afficher les id des livres qui n'ont jamais été rendu
SELECT id_livre FROM emprunt WHERE date_rendu IS NULL;
-- un champ NULL se test avec IS

-----------------------------------------------------------------------------

--REQUETE IMBRIQUE (sur plusieurs tables)
--Afficher le titre des livres dans la nature(date rendu NULL)
SELECT titre FROM livre WHERE id_livre IN (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL);
--Requete detaillee
SELECT titre FROM livre WHERE id_livre IN(105, 100);

---------------------------------------------------------------------------

--Afficher la liste des abonnes n'ayant pas rendu les livres à la bibliotheque
SELECT * FROM abonne WHERE id_abonne IN (SELECT id_abonne FROM emprunt WHERE date_rendu IS NULL);
--Requete detaillee
SELECT * FROM abonne WHERE id_abonne IN(3, 2);
--Afin de realiser une requete imbriquee, il faut obligatoirement un champ commun entre les deux tables
-- il faut toujours se poser la question : "De quelle tables je vais avoir besoin pour executer la requete imbriquee et quel est le champs commun entre les deux tables ?"

----------------------------------------------------------------------------

--Nous aimerions connaitre le n° de(s) livre(s) que Chloe à emprunte à la bibliotheque
SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'chloe');
-- Requete detaillee
SELECT id_livre FROM emprunt WHERE id_abbone IN(3);

----------------------------------------------------------------------------

--Afficher les prenoms des abonnes ayant emprunte un livre le 19-12-2014
SELECT prenom FROM abonne WHERE id_abonne IN(SELECT id_abonne FROM emprunt WHERE date_sortie = '2014-12-19');
--Requete detaillee
SELECT prenom FROM abonne WHERE id_abonne IN(3, 4, 1);

---------------------------------------------------------------------------

--Combien de livre Guillaume a emprunte a la bibliotheque ?
SELECT COUNT(id_livre) AS 'Livre emprunte par Guillaume' FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'Guillaume');
--Requete detaillee
SELECT COUNT(id_livre) AS 'Livre emprunte par Guillaume' FROM emprunt WHERE id_abonne IN(1);

-----------------------------------------------------------------------------

--Afficher la liste des abonnes(prenom) ayant deja emprunte un livre d'Alphonse DAUDET
SELECT prenom FROM abonne WHERE id_abonne IN(SELECT id_abonne FROM emprunt WHERE id_livre IN(SELECT id_livre FROM livre WHERE auteur = 'ALPHONSE DAUDET'));
--Requete detaillee
SELECT prenom FROM abonne WHERE id_abonne IN(SELECT id_ABONNE FROM emprunt WHERE id_livre IN(103));

--Afficher la liste des abonnes(prenoms) ayant deja emprunter un livre d'Alphonse DAUDET
--La liste des abonnes se trouvent dans la table abonnes
--Le n° id des livres écrits par Alphonse Daudet se trouve dans la table livre

----------------------------------------------------------------------------

--Nous aimerions connaitre le titre de(s) livres que Chloe a emprunter a la bibliotheque
SELECT titre FROM livre WHERE id_livre IN(SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
--Requete detaillee
SELECT titre FROM livre WHERE id_livre IN(100, 105,(3));

----------------------------------------------------------------------------

-- Et aussi nous aimerions connaitre les titres de livre que Chloé n'a pas emprunté --
SELECT titre FROM livre WHERE id_livre NOT IN(SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
-- Requete detaillé --
SELECT titre FROM livre WHERE id_livre NOT IN(100,105);
SELECT id_livre FROM emprunt WHERE id_abonne IN(3);

-------------------------------------------------------------------------------

-- Nous aimerions maintenant connaitre le titre de(s) livre(s) que chloé n'a pas encore rendu(s) à la bibliotheque
SELECT titre FROM livre WHERE id_livre IN(SELECT id_livre FROM emprunt WHERE date_rendu IS NULL AND id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
-- requete détaille --
SELECT titre FROM livre WHERE id_livre IN
    (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL AND id_abonne IN(3);
-- requete détaille --
SELECT titre FROM livre WHERE id_livre IN(105);

-------------------------------------------------------------------------------
-- Qui a emprunté le plus de livre à la bibliotheque --
SELECT prenom FROM abonne WHERE id_abonne = (SELECT id_abonne FROM emprunt GROUP BY id_abonne ORDER BY COUNT(id_abonne) DESC LIMIT 0,1);

-------------------------------------------------------------------------------

-- JOINTURE --
-- Nous aimerions connaitre les dates de sortie et de rendu pour l'abonné "Guillaume" --

-- Différence Jointure et requete imbriquée : une jointure et une requete imbriquée permettent de faire des relations entre les différentes tables afin d'avoir des colonnes associé pour former qu'un seul résultat --
-- Une jointure est possible dans tout les cas --
-- Une requete imbriquée est possible seulement dans le cas ou le resultat est issue de la même table

SELECT a.prenom, e.date_sortie, e.date_rendu
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne
AND a.prenom = 'Guillaume';

SELECT date_sortie ,date_rendu FROM emprunt WHERE id_abonne = (SELECT id_abonne FROM abonne WHERE prenom = 'Guillaume'); -- Requete imbriquée --

-------------------------------------------------------------------------------

-- Nous aimerions connaitre les mouvements des livres (date_sortie et date_rendu) écrit par "ALPHONSE DAUDET" --
SELECT l.auteur, e.date_sortie, e.date_rendu
FROM emprunt e, livre l
WHERE l.id_livre = e.id_livre
AND l.auteur = 'ALPHONSE DAUDET';

SELECT date_sortie, date_rendu FROM emprunt WHERE id_livre = (SELECT id_livre FROM livre WHERE auteur = 'ALPHONSE DAUDET'); -- Requete imbriquée --

-------------------------------------------------------------------------------

--Qui a emprunter le livre "Une vie" sur l'année 2014 ?
SELECT a.prenom
FROM abonne a, emprunt e, livre l
WHERE a.id_abonne = e.id_abonne
AND l.id_livre = e.id_livre
AND l.titre = 'Une vie'
AND e.date_sortie LIKE '2014%';

--Requete imbrique
SELECT prenom FROM abonne WHERE id_abonne IN(SELECT id_abonne FROM emprunt WHERE date_sortie LIKE '2014%' AND id_livre IN(SELECT id_livre FROM livre WHERE titre = 'Une vie'));

------------------------------------------------------------------------------

--Nous aimerions connaitre le nombre de livre emprunter par chaque abonnes.
SELECT a.prenom, COUNT(e.id_livre) AS 'Nombres de livre empruntes'
FROM emprunt e, abonne a
WHERE e.id_abonne = a.id_abonne
GROUP BY e.id_abonne;

------------------------------------------------------------------------------

--Nous aimerions connaitre le nombre de livre a rendre pour chaque abonne.
SELECT a.prenom, COUNT(e.id_livre) AS 'Nombres de livre a rendre'
FROM emprunt e, abonne a
WHERE e.id_abonne = a.id_abonne
AND e.date_rendu IS NULL
GROUP BY e.id_abonne;

------------------------------------------------------------------------------

--Qui a emprunter quoi? Et quand ? (titres des livres empruntes, à quelle date, et savoir par qui)

    SELECT a.prenom, e.date_sortie, l.titre
    FROM abonne a, emprunt e, livre l
    WHERE a.id_abonne = e.id_abonne
    AND e.id_livre = l.id_livre;

------------------------------------------------------------------------------

--Afficher les prenoms des abonnes avec le n° des livres qu'ils ont empruntés
SELECT a.prenom, e.id_livre
FROM abonne a, emprunt e
WHERE a.id_abonne = e.id_abonne;

------------------------------------------------------------------------------

--Relancer la derniere jointure, vous apparaissez pas...
SELECT abonne.prenom, emprunt.id_livre
FROM abonne
LEFT JOIN emprunt ON abonne.id_abonne = emprunt.id_abonne;
--La clause LEFT JOIN permet de rappatrier toute les donnees dans la table considere comme etant de gauche (donc abonne dans notre cas) sans correspondance exigee dans l'autre table (emprunt). Cest ce que l'on appel une jointure externe.
