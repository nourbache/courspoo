<?php 
namespace Core\Database; 

use PDO; 

class Database 
{
    private $host = "localhost"; 
    private $user = "root"; 
    private $pwd = ""; 
    private $dbname = "project"; 
    private $pdo; 

    public function __construct()
    {
        include ROOT."/Config/configDb.php"; 
        $this->pdo = new \PDO(
            "mysql:host=".$configDb['host'].";dbname=".$configDb['dbname'], 
            $configDb['user'], 
            $configDb['pwd'], 
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
            ); 
        // $host = "localhost:3307"; 
        // $user = "root"; 
        // $pwd = ""; 
        // $dbname = "project"; 
   
//    $this->pdo = new PDO(
//        "mysql:host=$host;dbname=$dbname", 
//        $user, 
//        $pwd
//        ); 
    }

    public function getPDO()
    {
        return $this->pdo; 
    }
}
?>