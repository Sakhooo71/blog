<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $post = new Post();
         $post->setTitle('Tintin au tibet')
              ->setSlug('tintin-au-tibet')
              ->setContent('Lorem ipsum')
              ->setImage('https://via.placeholder.com/350x150')
              ->setCreatedAt(new DateTimeImmutable('now'))
              ->setUpdatedAt(new DateTimeImmutable('now'))
              ;



         $manager->persist($post);

        $manager->flush();
    }
}
