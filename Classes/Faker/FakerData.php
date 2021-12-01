<?php 
namespace Classes\Faker;

use Faker\Factory; 

class FakerData 
{
    //ATTRIBUTES
    private $faker; 

    //METHODS
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function fakeUser()
    {
        return [
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "email" => $this->faker->email(),
            "telephone" => $this->faker->phoneNumber(),
            "adresse" => $this->faker->streetAddress(),
            "cp" => $this->faker->postCode(),
            "ville" => $this->faker->city()
        ]; 
    }
    public function fakePaiement()
    {
        return [
            "cardNumber" => $this->faker->creditCardNumber(),
            "exp" => $this->faker->creditCardExpirationDateString(), 
            "crypto" => $this->faker->randomNumber(3, true)
        ]; 
    }

    public function fakeArticle()
    {
        return [
            "titre" => $this->faker->sentence(),
            "contenu" => $this->faker->paragraphs(4, true),
            "date_creation" => $this->faker->dateTime(),
            "categorie" => $this->faker->word(),
            "auteur" => $this->faker->name()
        ]; 
    }
}
?>