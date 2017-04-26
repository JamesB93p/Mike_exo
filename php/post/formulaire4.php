<?php
if($_POST)
{
	if(iconv_strlen($_POST['pseudo']) == 0 || iconv_strlen($_POST['email']) == 0)
	{
		echo "champ obligatoire";
	}
	else{
		foreach($_POST as $indices => $valeurs)
		{
			echo $indices . ' : ' . $valeurs . "<br>";
		}
	}
	// Imaginons que nous avons un site vitrine, nous ne poss�dons pas de BDD, seulement un formulaire de contact, il serait int�ressant de pouvoir r�cup�rer la liste des emails si nous voulions envoyer une newsletter � tout nos contact, il existe en PHP des fonctions qui permettent de r�cup�rer des saisies directement dans un fichier texte, voici ces fonctions : fopen(), fwrite(), fclose()
	
	$fichier = fopen("liste.txt", "a"); // fopen() en mode "a" permet de cr�er le fichier si il n'est pas trouv�, sinon de l'ouvrir
	fwrite($fichier, $_POST['pseudo'] . ' - '); // fwrite() permet d'�crire dans le fichier represent� par $fichier
	fwrite($fichier, $_POST['email'] . "\r\n"); // "\r\n" permet de passer � la ligne dans le fichier
	fwrite($fichier, "----------------------" . "\r\n");
	fclose($fichier); // fclose() qui n'est pas indispensable, permet de fermer le fichier
}

// contexte : si l'on souhaite enregistrer des membres � une newsletter et que l'on ne poss�de pas de BDD, il serait int�ressant de le faire via un fichier texte
 







