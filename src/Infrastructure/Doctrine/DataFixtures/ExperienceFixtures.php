<?php

namespace App\Infrastructure\Doctrine\DataFixtures;

use App\Infrastructure\Doctrine\Entity\Experience;
use Doctrine\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;

class ExperienceFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 5; $i++) {
            $experience = new Experience();
            $experience->setId(Uuid::uuid4());
            $experience->setDescription("Lorem Ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
            $experience->setCompany("Société $i");
            $experience->setTitle("Title$i");
            $experience->setPdf("https://via.placeholder.com/150");
            $experience->setImg("https://via.placeholder.com/150");
            $experience->setUrl("Monurl");

            $experience->setStartDate(new \DateTime());
            $experience->setEndDate(new \DateTime());
            $manager->persist($experience);
        }
        $manager->flush();
    }
}
