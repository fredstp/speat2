<?php



namespace App\DataFixtures;

use Faker;
use App\Entity\Restaurant;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $restaurant = new Restaurant();
            $restaurant->setNomDuRestaurant('restaurant'.$i);
            $restaurant->setCodeEtablissement($faker->randomNumber());
            $restaurant->setDenominationCommerciale($faker->sentence());
            $restaurant->setSiret($faker->randomNumber());
            $restaurant->setRestaurantAdress($faker->streetAddress());
            $restaurant->setCodePostal($faker->postcode());
            $restaurant->setVille($faker->city());
            $restaurant->setDepartement($faker->randomDigit());
            $restaurant->setGPS($faker->randomNumber());
            $restaurant->setTelephone($faker->randomNumber());
            $restaurant->setEmail($faker->email());
            $restaurant->setSiteWeb($faker->domainName());
            $restaurant->setRestaurantType($faker->word());
            $restaurant->setServiceProposes($faker->word());
            $restaurant->setCategoriesRestaurant($faker->word());
            $restaurant->setNbrCategoriesProduitRestaurant($faker->randomNumber());
            $restaurant->setUrlLogoRestaurant($faker->imageUrl());
            $restaurant->setUrlLogoMenu($faker->imageUrl());
            $restaurant->setUrlLogoCompoProduit($faker->imageUrl());
            
            $manager->persist($restaurant);
        }

        $manager->flush();
    }
}