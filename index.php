<?php 
/**
 * Include permet de charger un fichier , 
 * Si celui-ci n'est pas trouvé, le code affiche une warning error et le script continue d'être là 
 * 
 * Require permet de charger un fichier, 
 * Si celui-ci n'est pas trouvé, le code affiche une fatal error et le script est arrêté
 */

// require("Core/Autoload.php"); 
define("ROOT", __DIR__);
use Classes\Animal\Chat;
use Classes\Animal\Chien;
use Classes\Faker\FakerData; 
use Classes\Data\Categorie;


require ROOT."/vendor/autoload.php"; 
// require ROOT."/Core/Autoload.php";
// Autoload::register(); 

echo "coucou"; 
echo "<br>"; 

//instance 1 de chat 
$chat = new Chat("chaat", "noir", "raace", 10); 

echo $chat->getCouleur(); 
echo "<br>"; 
echo $chat->getConst(); 
echo "<br>"; 
// echo $chat->miauler("miauler"); 
// echo "<br>"; 
// var_dump($chat); 

//instance 2 de chat 
$chat2 = new Chat("chaaat2", "blanc", "raace", 2); 
echo $chat2->getCouleur(); 
echo "<br>"; 
// var_dump($chat2); 


// //instance de chien 
// $chien = new Chien ("chiennn", "noir", "raace", 10); 
// echo $chien->getNom(); 
// echo "<br>"; 
// echo $chien->getCouleur(); 
// echo "<br>"; 
// echo $chien->getRace(); 
// echo "<br>"; 
// echo $chien->getAge(); 
// echo "<br>"; 
// echo "<br>"; 

//instance 2 de chien 
$chien2 = new Chien ("chiennn2", "marron", "raace2", 2);  
echo $chien2->getNom(); 
echo "<br>"; 
echo $chien2->getCouleur(); 
echo "<br>"; 
echo $chien2->getRace(); 
echo "<br>"; 
echo $chien2->getAge(); 
echo "<br>"; 

//instance de la class faker 
$fake1 = new FakerData; 
var_dump($fake1->fakeUser()); 
var_dump($fake1->fakePaiement()); 

$categorie = new Categorie; 

//!empty pas obligatoire car on a is_numeric
if(isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"]))
{
    $categorie->getCategorie($_GET["id"]); 
}
else
{
    $categorie->getCategories(); 
}
$categories = $categorie->getCategories(); 
// var_dump($categories); 


// $categorie->addCategorie($_POST); 

?>

