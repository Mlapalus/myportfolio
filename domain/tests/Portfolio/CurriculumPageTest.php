<?php

namespace MLapalus\Portfolio\Domain\Tests\Portfolio;

use MLapalus\Portfolio\Domain\Entity\Experience;
use MLapalus\Portfolio\Domain\Entity\Formation;
use MLapalus\Portfolio\Domain\Entity\Portfolio;
use MLapalus\Portfolio\Domain\Entity\Tag;
use MLapalus\Portfolio\Domain\Presenter\CurriculumPresenterInterface;
use MLapalus\Portfolio\Domain\Response\CurriculumResponse;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\ExperienceRepository;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\FormationRepository;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\PortfolioRepository;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\TagRepository;
use MLapalus\Portfolio\Domain\UseCase\CurriculumPage;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;

/**
 * Class CurriculumPageTest
 */
class CurriculumPageTest extends TestCase
{

    /**
     * @var CurriculumPage
     */
    private CurriculumPage $useCase;

    /**
     * @var CurriculumPresenterInterface
     */
    private CurriculumPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->presenter = new class() implements CurriculumPresenterInterface {
            public CurriculumResponse $response;

            public function present(CurriculumResponse $response): array
            {
                return $response->getCurriculum();
            }
        };

        $this->useCase = new CurriculumPage();
    }

    public function testSuccessful(): void
    {
        $experience = new ExperienceRepository();
        $formation = new FormationRepository();
        $tag = new TagRepository();
        $portfolio = new PortfolioRepository();

        $response = $this->useCase->execute($experience, $formation, $tag, $portfolio);
        $data = $this->presenter->present($response);

        $this->assertInstanceOf(CurriculumResponse::class, $response);
        $this->assertIsArray($data);
        $this->assertArrayHasKey("surname", $data);
        $this->assertArrayHasKey("experiences", $data);
        $this->assertArrayHasKey("formations", $data);
        $this->assertArrayHasKey("tagData", $data);
        $this->assertArrayHasKey("dataPortfolio", $data);
        $this->assertEquals("MLapalus", $data["surname"]);
        $this->assertIsArray($data["experiences"]);
        $this->assertIsArray($data["formations"]);
        $this->assertIsArray($data["tagData"]);
        $this->assertIsArray($data["dataPortfolio"]);

        $this->assertInstanceOf(Experience::class, $data["experiences"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["experiences"][0]->getId());
        $this->assertEquals("Exp1",$data["experiences"][0]->getTitle());
        $this->assertEquals("Cie1",$data["experiences"][0]->getCompany());
        $this->assertEquals("Description1",$data["experiences"][0]->getDescription());
        $this->assertEquals("URL1",$data["experiences"][0]->getUrl());
        $this->assertEquals("IMG1",$data["experiences"][0]->getImg());
        $this->assertEquals("PDF1",$data["experiences"][0]->getPdf());
        $this->assertInstanceOf(\DateTimeInterface::class, $data["experiences"][0]->getEndDate());
        $this->assertInstanceOf(\DateTimeInterface::class, $data["experiences"][0]->getStartDate());

        $this->assertInstanceOf(Experience::class, $data["experiences"][1]);
        $this->assertEquals("Exp2", $data["experiences"][1]->getTitle());

        $this->assertInstanceOf(Experience::class, $data["experiences"][2]);
        $this->assertEquals("Exp3", $data["experiences"][2]->getTitle());

        $this->assertInstanceOf(Formation::class, $data["formations"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["formations"][0]->getId());

        $this->assertEquals("URL1",$data["formations"][0]->getUrl());
        $this->assertEquals("IMG1",$data["formations"][0]->getImg());
        $this->assertEquals("PDF1",$data["formations"][0]->getPdf());
        $this->assertEquals("Grd1",$data["formations"][0]->getGraduate());
        $this->assertEquals("School1",$data["formations"][0]->getSchool());
        $this->assertEquals("Description1",$data["formations"][0]->getDescription());

        $this->assertInstanceOf(Portfolio::class, $data["dataPortfolio"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["dataPortfolio"][0]->getId());
        $this->assertEquals("IMG1",$data["dataPortfolio"][0]->getImg());
        $this->assertEquals("URL1",$data["dataPortfolio"][0]->getUrl());
        $this->assertIsArray($data["dataPortfolio"][0]->getTags());


        $this->assertInstanceOf(Tag::class, $data["tagData"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["tagData"][0]->getId());
        $this->assertIsArray($data["tagData"][0]->getPortfolios());

    }
}