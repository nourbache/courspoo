<?php 
namespace Classes\Animal; 
//une class est une representation d'un objet que l'on pourra instancier
class Chat extends Mammifere
{
    //propriétés ou attributs de la class (variables)
    protected $type = "chat"; 
    private const TYPE = "chat"; 
    // private $nom; 
    // private $couleur; 
    // private $age;
    
    // //METHODS
    // public function __construct($nom, $couleur, $race, $age)
    // {
    //     $this->nom = $nom; 
    //     $this->couleur = $couleur; 
    //     $this->race = $race; 
    //     $this->age = $age; 
    // }
    
    function miauler(string $cri):string
    {
        return $cri; 
    }

    function getConst()
    {
        return self::TYPE; 
    }

    public static $cri = "miaou"; 

    // /**
    //  * Undocumented function
    //  *
    //  * @return string
    //  */
    // public function getCouleur():string
    // {
    //     return $this->couleur; 
    // }

    // /**
    //  * Undocumented function
    //  *
    //  * @param string $couleur
    //  */
    // public function setCouleur(string $couleur)
    // {
    //     $this->couleur = $couleur; 
    // }
}
?>