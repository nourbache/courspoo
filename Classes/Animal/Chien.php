<?php 
namespace Classes\Animal; 
class Chien extends Mammifere
{
    // //ATTRIBUTES
    protected $type = "chien"; 
    // private $nom; 
    // private $couleur; 
    private $race; 
    // private $age; 

    // //METHODS

    public function __construct($nom, $couleur, $race, $age)
    {
        $this->race = $race; 
        parent::__construct($this->type, $nom, $couleur, $age); 
    }
    // public function __construct($nom, $couleur, $race, $age)
    // {
    //     $this->nom = $nom; 
    //     $this->couleur = $couleur; 
    //     $this->race = $race; 
    //     $this->age = $age; 
    // }

    // public function getNom()
    // {
    //     return $this->nom; 
    // }

    // public function setNom($newnom)
    // {
    //     $this->nom = $newnom; 
    // }

    // public function getCouleur()
    // {
    //     return $this->couleur; 
    // }

    // public function setCouleur($newcouleur)
    // {
    //     $this->couleur = $newcouleur; 
    // }

    public function getRace()
    {
        return $this->race; 
    }

    public function setRace($newrace)
    {
        $this->race = $newrace; 
    }

    // public function getAge()
    // {
    //     return $this->age; 
    // }

    // public function setAge($newage)
    // {
    //     $this->age = $newage; 
    // }


    public function aboyer()
    {
        return "aboyer"; 
    }
}
?>