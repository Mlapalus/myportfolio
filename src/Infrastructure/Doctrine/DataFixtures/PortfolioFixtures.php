<?php


namespace App\Infrastructure\Doctrine\DataFixtures;


use App\Infrastructure\Doctrine\Entity\Portfolio;
use App\Infrastructure\Doctrine\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;

class PortfolioFixtures extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i < 5; $i++)
        {
            $portfolio = new Portfolio();
            $portfolio->setId(Uuid::uuid4());
            $portfolio->setDescription("Lorem Ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
            $portfolio->setTitle("Title$i");
            $portfolio->setImg("https://via.placeholder.com/150");
            $portfolio->setCreatedDate(new \DateTime());
            $portfolio->setUrl("http://true.com");
            $tags=[];
            for ($j=1;$j<random_int(1,6);$j++)
            {
              $tag = new Tag();
              $tag->setId(Uuid::uuid4());
              $tag->setTag("TAG$j");
              $portfolios = [];
              $portfolios[] = $portfolio;
              $tag->setPortfolios($portfolios);
              $tags[] = $tag;
              $manager->persist($tag);
            }
            $portfolio->setTags($tags);
            $manager->persist($portfolio);
        }
        $manager->flush();
    }
}