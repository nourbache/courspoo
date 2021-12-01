<?php 
namespace Classes\Entity; 

class Categorie
{
    private $id; 
    private $name; 
    private $firstname; 

    public function __construct()
    {
        $this->name = $this->name . ".........."; 
    }

    public function hydrate($categorie)
    {
        foreach ($categorie as $key => $value)
        {
            $method = "set".ucfirst($key); 
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id; 
    }

    public function getName()
    {
        return $this->name; 
    }
}