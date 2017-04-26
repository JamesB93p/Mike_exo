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
	// Imaginons que nous avons un site vitrine, nous ne possédons pas de BDD, seulement un formulaire de contact, il serait intéressant de pouvoir récupérer la liste des emails si nous voulions envoyer une newsletter à tout nos contact, il existe en PHP des fonctions qui permettent de récupérer des saisies directement dans un fichier texte, voici ces fonctions : fopen(), fwrite(), fclose()
	
	$fichier = fopen("liste.txt", "a"); // fopen() en mode "a" permet de créer le fichier si il n'est pas trouvé, sinon de l'ouvrir
	fwrite($fichier, $_POST['pseudo'] . ' - '); // fwrite() permet d'écrire dans le fichier representé par $fichier
	fwrite($fichier, $_POST['email'] . "\r\n"); // "\r\n" permet de passer à la ligne dans le fichier
	fwrite($fichier, "----------------------" . "\r\n");
	fclose($fichier); // fclose() qui n'est pas indispensable, permet de fermer le fichier
}

// contexte : si l'on souhaite enregistrer des membres à une newsletter et que l'on ne possède pas de BDD, il serait intéressant de le faire via un fichier texte
 







