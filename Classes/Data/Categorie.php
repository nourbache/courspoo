<?php 
namespace Classes\Data;

use Core\Database\Database; 

class Categorie
{
    public function __construct()
    {
        include ROOT."/Config/configDb.php"; 
        $this->pdo = (new Database)->getPDO(); 
    }
    public function getCategories()
    {
        // $db = new Database; 
        // $pdo = $db->getPDO(); 
        // $pdo = (new Database)->getPDO(); 
        // var_dump($pdo); 

        $query = $this->pdo->query("SELECT * FROM users"); 
        $query->setFetchMode(\PDO::FETCH_OBJ); ; 
        return $query->fetchAll(); 
        include ROOT."/templates/Categorie/index.php"; 
    }

    public function getCategorie(int $id)
    {
        // $id = 4; 
        $query = $this->pdo->query("SELECT * FROM users WHERE id_user=$id"); 
        $query->setFetchMode(\PDO::FETCH_CLASS, "Classes\Entity\Categorie"); //retourne les valeurs liées à la class
        $categorie = $query->fetchAll(); 
        include ROOT."/templates/Categorie/single.php"; 
    }

    public function addCategorie( $categorie)
    {
        if(!empty($categorie))
        {
            $prepare = $this->pdo->prepare("INSERT INTO users (nom_user, prenom_user) VALUES (:name, :firstname)"); 
            $prepare->execute($categorie); 
        }
        include ROOT."/templates/Categorie/save.php"; 
    }
    
}
?>
