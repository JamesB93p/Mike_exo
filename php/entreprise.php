<?php

class entreprise{
    private $logo;
    private $rue;
    private $code;
    private $ville;
    private $taille;
    private $dateCreation;

    function __construct($new_logo,$new_rue,$new_code,$new_ville,$new_taille,$new_dateCreation)
    {
        $this->logo = $new_logo;
        $this->rue = $new_rue;
        $this->code = $new_code;
        $this->ville = $new_ville;
        $this->taille = $new_taille;
        $this->dateCreation = $new_dateCreation;

    }

    public function ficheSociete(){
        echo "Logo : ".$this->logo."<br />"."Prenom : ".$this->rue."<br />"."Code : ".$this->code."<br />"."Ville : ".$this->ville."<br />"."Taille : ".$this->taille."<br /> Prenom : ".$this->dateCreation;
    }

    // GETTER
    public function getLogo($new_logo){
        $this->logo = $new_logo;
    }
    public function getRue($new_rue){
        $this->rue = $new_rue;
    }
    public function getCode($new_code){
        $this->code = $new_code;
    }
    public function getVille($new_ville){
        $this->ville = $new_ville;
    }
    public function getTaille($new_taille){
        $this->taille = $new_taille;
    }
    public function getDateCreation($new_dateCreation){
        $this->dateCreation = $new_dateCreation;
    }
    //SETTER
    public function setLogo($new_logo){
        $this->logo = $new_logo;
    }
    public function setRue($new_rue){
        $this->rue = $new_rue;
    }
    public function setCode($new_code){
        $this->code = $new_code;
    }
    public function setVille($new_ville){
        $this->ville = $new_ville;
    }
    public function setTaille($new_taille){
        $this->taille = $new_taille;
    }
    public function setDateCreation($new_dateCreation){
        $this->dateCreation = $new_dateCreation;
    }

    //Comparaison
    public function comparaison($societe2){
    	if($this->taille > $societe2->getTaille()){
        	echo $this->nom." a plus de salarier que ";
            echo $societe2->getNom();
        }elseif($this->taille < $societe2->getTaille()){
        	echo $this->nom." a moins de salarier que ";
            echo $societe2->getNom();
        }else{
        	echo $this->nom." a autant de salarier que ";
            echo $societe2->getNom();
        }
    	if($this->date > $societe2->getDate()){
        	echo $this->nom." est plus jeune que ";
            echo $societe2->getNom();
        }elseif($this->date < $societe2->getDate()){
        	echo $this->nom." a moins de salarier que ";
            echo $societe2->getNom();
        }else{
        	echo $this->date." a autant de salarier que ";
            echo $societe2->getNom();
        }

}

$test = new entreprise(""," 4 rue jean jaures"," 75010","Paris","8","2009");
$test->ficheSociete();


 ?>
