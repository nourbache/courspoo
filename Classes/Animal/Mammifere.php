<?php 
namespace Classes\Animal; 
class Mammifere 
{
   
    // //ATTRIBUTES
    private $type; 
    private $nom; 
    private $couleur; 
    private $age; 

    //METHODS
    public function __construct($type, $nom, $couleur, $age)
    {
        $this->nom = $nom; 
        $this->couleur = $couleur; 
        $this->age = $age; 
    }
     public function getNom()
    {
        return $this->nom; 
    }

    public function setNom($newnom)
    {
        $this->nom = $newnom; 
    }

    public function getCouleur()
    {
        return $this->couleur; 
    }

    public function setCouleur($newcouleur)
    {
        $this->couleur = $newcouleur; 
    }

    public function getAge()
    {
        return $this->age; 
    }

    public function setAge($newage)
    {
        $this->age = $newage; 
    }
}
?>