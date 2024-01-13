<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR'); // Chargement de Faker en français

        for ($i = 0; $i < 50; $i++) { // Boucles pour 50 articles

            $post = new Post();
            $post->setTitle($faker->sentence())
                 ->setSlug($faker->slug())
                 ->setContent($faker->paragraphs(5, true))
                 ->setImage('https://via.placeholder.com/350*150') // Generate a random image URL
                 ->setCreatedAt(new DateTimeImmutable('1 month ago')) // Use Faker for dates
                 ->setUpdatedAt(new DateTimeImmutable('1 week ago'))
            ;

            $manager->persist($post);
        };

        $manager->flush();
    }
}


