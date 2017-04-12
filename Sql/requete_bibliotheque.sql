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
--




----------------------------------------------------------------------------

--Nous aimerions connaitre le titre de(s) livres que Chloe a emprunter a la bibliotheque
SELECT titre FROM livre WHERE id_livre IN(SELECT id_livre FROM emprunt WHERE id_abonne IN(SELECT id_abonne FROM abonne WHERE prenom = 'Chloe'));
--Requete detaillee
SELECT titre FROM livre WHERE id_livre IN(100, 105,(3));

----------------------------------------------------------------------------
