<?php

class ville{
    private $nom;
    private $departement;

    function __construct($nom,$departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    function getNom(){
        return $this->nom;
    }

    function getDepartement(){
        return $this->departement;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

    function setDepatement(){
        $this->departement = $departement;
    }


    function getInfo(){
        echo "La ville : ".$this->getNom()." est dans le departement ".$this->getDepartement()."</br>";
    }
}



$meaux = new ville("Meaux", "77");
$meaux -> getInfo();
$paris = new ville("Paris", "75");
$paris -> getInfo();
