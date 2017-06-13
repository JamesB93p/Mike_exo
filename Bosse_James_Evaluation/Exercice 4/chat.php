<?php

    class Chat {
        private $prenom;
        private $age;
        private $couleur;
        private $sexe;
        private $race;

        public function __construct($newPrenom, $newAge, $newCouleur, $newSexe, $newRace){
            $this->prenom = $newPrenom;
            $this->age = $newAge;
            $this->couleur = $newCouleur;
            $this->sexe = $newSexe;
            $this->race = $newRace;
            $this->mysqli = new mysqli($this->prenom, $this->age, $this->couleur, $this->sexe, $this->race);
            }




            // GETTER => AFFICHER
            public function getPrenom(){
                echo "Prenom : ".$this->prenom."<br/>";
            }
            public function getAge(){
                echo "Age : ".$this->age."<br/>";
            }
            public function getSexe(){
                echo "Sexe : ".$this->sexe."<br/>";
            }

            public function getCouleur(){
                echo "Couleur : ".$this->couleur."<br/>";
            }

            public function getRace(){
                echo "Race : ".$this->race."<br/>";
            }


            // SETTER = MODIFIER
            public function setPrenom($newPrenom){
                $this->prenom = $newPrenom;
            }
            public function setAge($newAge){
                $this->age = $newAge;
            }
            public function setSexe($newSexe){
                $this->sexe = $newSexe;
            }

            public function setCouleur($newCouleur){
                $this->couleur = $newcouleur;
            }

            public function setRace($newRace){
                $this->race = $newRace;
            }
}
