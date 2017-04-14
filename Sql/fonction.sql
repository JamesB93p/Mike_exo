----------------------FONCTION PREDEFINIES--------------------

--Fonctions predefinies : Prevu par le langage SQL et execute par le developpeur, elles permettent d'effectuer un traitement specifique
SELECT DATABASE(); -- Indique qu'elle BDDest actuellement selectionne
SELECT VERSION();
INSERT INTO abonne(prenom) VALUES ('test');
SELECT LAST_INSERT_id(); --Permet d'afficher le dernier identifiant insere
SELECT CURDATE(); --Retourne la date du jour au format'yyyy-mm-jj
SELECT CURETIME(); --Retourne l'heure courante au format 'hh:MM:SS'
SELECT DATE_FORMAT('2012-10-03 22:23:00', '%d/%m/Y% - %H:%i:%s'); -- Retourne la date et l'heure au format demande
-- Pour toute fonction predefinie, il est toujours important de consulter la documentation afin de savoir quels parametres/arguments nous devons envoyer a notre fonction et surtout de savoir ce qu'elle Retourne
SELECT *, DATE_FORMAT(date_rendu, 'le %d/%m/%Y') AS 'Date rendu' FROM emprunt; --met les dates au format francais
SELECT DAYNAME('2017-04-13'); -- affiche le jour d'une date en particulier
SELECT DAYOFYEAR('2017-04-13'); --affiche le numeros du jours de l'annee
INSERT INTO abonne(prenom) VALUES(PASSWORD('mypass')); --Permet de crypte le mdp
SELECT LENGTH('test'); -- calcul la taille de la chaine
SELECT LOCATE('j', 'aujourd\'hui'); -- retourne la position de la lettre "j" dans le mot "aujourd'hui"
SELECT SUBSTRING('bonjour', 4); -- coupe et affiche la chaine a partir du 4eme caractere
SELECT CONCAT_WS("-", " premier nom ", " deuxieme nom ", " troisieme nom "); -- la fonction CONCAT_WS() signifie CONCAT With Separator, c'est a dire "concatenation(suivi de) avec separateur"
SELECT CONCAT_WS(" ", id_abonne, prenom) AS 'liste' FROM abonne; -- liste des abonne avec leur numero dans une seul colonne
SELECT REPLACE('www.cdiscount.fr' , 'w', 'W'); -- remplace un caractere dans une chaine par un autre caractere

-------------------------------------------------------------------

-----------------------FONCTION UTILISATEUR-------------------------

-- Fonction utilisateur : prevu, inscrite et executer par le developpeur pour un traitement specifique

DELIMITER $
CREATE FUNCTION calcul_tva(nb INT) RETURNS TEXT
COMMENT 'Fonction permettant le calcul de la TVA'
READS SQL DATA
BEGIN
RETURN CONCAT_WS(' : ', 'le resultat est ', (nb*1.2));
END
$ DELIMITER;

SELECT calcul_tva(10);
