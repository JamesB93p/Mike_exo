---

> Lorsqu'on installe un gestionnaire d'évènement *click* sur un bouton, et que plus tard l'utilisateur clique, que se passe t'il ?

---

Le navigateur doit trouver sur quoi on a cliqué, il commence donc à visiter l'arbre DOM en partant de la balise *html* (représentée par l'objet *document*) jusqu'à la balise du bouton contenant le clic.

Pour chaque balise rencontrée, le navigateur exécute le ou les gestionnaires d'évènement *click*, s'il y en a : c'est la phase de **capture de l'évènement** (en anglais "**event capturing**").

Une fois arrivé au bouton le navigateur exécute le gestionnaire d'évènement *click* de celui-ci.

Le navigateur repart alors dans l'autre sens, il remonte l'arbre de parent en parent jusqu'à la racine, exécutant au passage le ou les gestionnaires d'évènement *click*, s'il y en a : c'est la phrase de **bouillonnement de l'évènement** (en anglais "**event bubbling**").


> Conclusion : une balise parent dispose de deux occasions pour intercepter un évènement de l'un de ses enfants !

<a target="_blank" href="http://stackoverflow.com/questions/4616694/what-is-event-bubbling-and-capturing">Voir aussi cette discussion sur le site StackOverflow</a>

C'est au moment de l'appel à la méthode *addEventListener()* que l'on indique si on veut un gestionaire d'évènement pour la phase de capture (booléen à *true*) ou de bouillonement (booléen à *false*, valeur par défaut).