<?php

namespace App\Infrastructure\Doctrine\DataFixtures;

use App\Infrastructure\Doctrine\Entity\Formation;
use Doctrine\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;

class FormationFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 4; $i++) {
            $formation = new Formation();
            $formation->setId(Uuid::uuid4());
            $formation->setDescription("Lorem Ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
            $formation->setGraduate("Diplome $i");
            $formation->setTitle("Title$i");
            $formation->setImg("https://via.placeholder.com/150");
            $formation->setPdf("https://via.placeholder.com/150");
            $formation->setUrl("MyLink$i");
            $formation->setStartDate(new \DateTime());
            $formation->setEndDate(new \DateTime());
            $formation->setSchool("Ecole$i");
            $manager->persist($formation);
        }
        $manager->flush();
    }
}
