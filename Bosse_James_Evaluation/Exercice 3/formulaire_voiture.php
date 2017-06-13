<?php
    class Voiture {


        private $mysqli;

        public function __construct(){ // Lancement a la création de l'instance
            $this->mysqli = new mysqli("localhost", "root", "", "formulaire_voiture"); // new = Instance -> Recuperer tout les variables et les fonctions public de la class pour les mettre dans une variable.
            /* Vérification de la connexion */
            if ($this->mysqli->connect_errno) {
            	printf("Échec de la connexion : %s\n", $this->mysqli->connect_error);
            	exit();
            }
        }

        public function enregistrer($laMarque, $leModele, $lAnnee, $laCouleur) {

            $sql = "INSERT INTO voitures (Marque, Modele, Annee, Couleurs)
            VALUES ('$laMarque', '$leModele', '$lAnnee', '$laCouleur')";

            if ($this->mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $this->mysqli->error;
            }

            //$this->mysqli->query("INSERT INTO `voitures`(Marque`, `Modele`, `Annee`, `Couleurs`) VALUES ($laMarque', '$leModele', '$lAnnee', '$laCouleur')");

        }

        public function lecture(){
            $listeVoiture = $this->mysqli->query("SELECT * FROM voiture");
            $tableauVoiture = $listeVoiture->fetch_all(MYSQLI_ASSOC);
            echo "<pre>";
            print_r($tableauVoiture);
            echo "</pre>";
        }

        public function supprimer($id){
            $this->mysqli->query("DELETE FROM `voiture` WHERE id = $id");
        }

    }

    $voiture = new Voiture();
    $voiture->enregistrer($_POST["marque"], $_POST["modele"], $_POST["annee"],$_POST["couleur"]);
//$voiture->enregistrer('test', 'test', 'test', 'test');
