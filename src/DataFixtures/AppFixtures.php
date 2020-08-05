<?php

namespace App\DataFixtures;

use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $personne = new Personne();
        $faker = Factory::create('fr_FR');
        for ($i=0; $i<50 ; $i ++){
            $personne = new Personne();
            $personne->setPrenom($faker->firstName);
            $personne->setNom($faker->lastName);
            $manager->persist($personne);
        }

        $manager->flush();
    }
}
