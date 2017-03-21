***

> Afin d'afficher et faire correctement fonctionner une page web, le navigateur a besoin de télécharger des ressources en utilisant le **protocole HTTP** : fichier HTML, feuilles de styles CSS, images, vidéos, scripts JavaScript, etc.

> Le navigateur exécute donc en tant que **client HTTP** une requête vers un **serveur HTTP** pour chacune de ces ressources située à une adresse précise sur le serveur : une **URL**.

***

La première **requête HTTP** est *déclenchée par l'utilisateur* : un hyperlien, un favori, saisie d'une **URL** dans la barre d'adresse du navigateur web.

Les autres **requêtes HTTP** sont *déclenchées à la lecture du HTML, du CSS et du JavaScript par le navigateur* : balise HTML img, fonction url() en CSS pour placer une image de fond avec la propriété background-image, etc.

Chaque **requête HTTP** faite par le client génère systématiquement une **réponse HTTP** du serveur.

La **réponse HTTP** contient notamment un code de statut, parmi lesquels :

* Le **code HTTP 200** qui signifie que tout s'est bien passé du point de vue du serveur
* Le **code HTTP 404** qui signifie qu'il n'y a aucune ressource à l'**URL** spécifiée par la **requête HTTP**

Voir sur Wikipédia une <a href="https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP" target="_blank">liste exhaustive des codes de statuts HTTP</a>