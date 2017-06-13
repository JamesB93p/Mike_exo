-- Dans un fichier à part, écrire la requête SQL permettant d’afficher un article (id = 10) et son auteur à l’aide d’une jointure.
 -- Note : ​N’écrivez que la requête SQL, pas de PHP. 

SELECT a.id, u.id, u.firstname, u.lastname
FROM articles a, users u
WHERE a.id = u.id
AND a.id = '10';

REQUETE JOINTURE

SELECT id FROM articles WHERE id IN(SELECT id, firstname, lastname FROM users WHERE id = '10');

REQUETE IMBRIQUE
