<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('description to TDK');
        $movie->setImagePath('https://pixabay.com/pl/photos/czapla-ptak-oko-tr%c3%b3jkolorowy-woda-7671357/');
        
        //Add data to pivor table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Joker');
        $movie2->setReleaseYear(2018);
        $movie2->setDescription('description to Joker');
        $movie2->setImagePath('https://pixabay.com/pl/illustrations/lis-zwierz%c4%99-drapie%c5%bcnik-monstera-7423990/');
        
        //Add data to pivor table
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
