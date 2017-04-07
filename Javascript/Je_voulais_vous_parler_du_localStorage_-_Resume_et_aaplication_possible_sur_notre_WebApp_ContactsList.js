/* 
Evolution 1 de l'app Contacts : Mettre en place le stockage local dans le navigateur via le localStorage().
Les fonctions localStorage.getItem(cle), localStorage.setItem(cle, valeur), .clear() permettrent respectivement de lire, écrire dans le localStorage et de se servir du navigateur comme d'une base de données.
(https://developer.mozilla.org/fr/docs/Web/API/Window/localStorage)

Attention : l'enregistrement via le localStorage.setItem() accepte en valeurs:
-> des données de type chaine de caractère
-> des données de type number
-> des données de type objet MAIS formatées avant en JSON (le format de données courant javascript object notation).

Si on veut sauvegarder UNE LISTE de contacts, c'est à dire notre tableau d'objets, alors on s'y prendra comme ça :
*/
contacts = [
    {email: 'marie@gmail.com', firstname: 'Marie', phone: '0688546622', address: '22 rue de l\'Elysée', cp:'75015', city: 'Paris', pro : false, timestamp: 1476264134, image: "https://randomuser.me/api/portraits/thumb/women/68.jpg" },
    {email: 'noah@laposte.net', firstname: 'Noah', phone: '0752824525', address: '2 allée des roses', cp:'93200', city: 'St Denis', pro : false, timestamp: 1460256014, image: "https://randomuser.me/api/portraits/thumb/men/61.jpg"},
    {email: 'bill.gates@microsoft.com', firstname: 'Bill', phone: '0621554738', address: '77 Avenue du Général de Gaulle', cp:'75008', city: 'Paris',pro : true, timestamp: 1469022000, image: "https://randomuser.me/api/portraits/thumb/men/69.jpg"}
];

// Ici on sauvegarde notre tableau de contacts avec en clé "contactsList"
// Nous sommes obligés de formater les données en JSON avant enregistrement avec JSON.stringify()
localStorage.setItem("contactslist",JSON.stringify(contacts));

// Quand on voudra récupérer la liste des contacts pour les afficher
contacts = localStorage.getItem("contactslist"); // retourne le tableau d'objets en format JSON

// Pour utiliser les données avec JS, il faut retransformer les données JSON en objet JS utilisable avec JSON.parse()
contacts = JSON.parse(contacts);

/*
 Cette dernière approche oblige juste à réenregistrer TOUTE la liste de contact à chaque fois qu'il y a un ajout ou un delete
 
 Autre voie pour "pusher" un contact dans une liste déjà sauvegardée dans le localStorage
 http://stackoverflow.com/questions/19635077/adding-objects-to-array-in-localstorage

 On utilise le localStorage dans les webApp ou le AppMobile pour stocker du contenu dans le navigateur, afin de limiter les requêtes externes et améliorer la rapidité d'une application (c'est le cas de devdocs)
 Mais aussi sur d'autres "stratégies" (stocker ce qu'a rentré un utilisateur dans un formulaire afin qu'il retrouve son contenu en cas de problème, stocker des choix et recherches courantes de  l'utilisateur, etc...
 
*/
