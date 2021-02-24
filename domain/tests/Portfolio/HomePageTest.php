<?php

namespace MLapalus\Portfolio\Domain\Tests\Portfolio;

use MLapalus\Portfolio\Domain\Entity\Portfolio;
use MLapalus\Portfolio\Domain\Entity\Tag;
use MLapalus\Portfolio\Domain\Presenter\HomePresenterInterface;
use MLapalus\Portfolio\Domain\Response\HomePageResponse;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\PortfolioRepository;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\TagRepository;
use MLapalus\Portfolio\Domain\UseCase\HomePage;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;

/**
 * Class HomePageTest
 * @package MLapalus\Portfolio\Domain\Tests\Portfolio
 */
class HomePageTest extends TestCase
{
    /**
     * @var HomePage
     */
    private HomePage $useCase;

    /**
     * @var HomePresenterInterface
     */
    private HomePresenterInterface $presenter;

    /**
     *
     */
    protected function setUp(): void
    {
        $this->presenter = new class () implements HomePresenterInterface {
            public HomePageResponse $response;

            public function present(HomePageResponse $response): array
            {
                return $response->getAboutMe();
            }
        };
        $this->useCase = new HomePage();
    }
    /**
     *
     */
    public function testSuccessful(): void
    {
        $tag = new TagRepository();
        $portfolio = new PortfolioRepository();

        $response = $this->useCase->execute($portfolio, $tag);
        $data = $this->presenter->present($response);

        $this->assertInstanceOf(HomePageResponse::class, $response);
        $this->assertIsArray($data);
        $this->assertArrayHasKey("surname", $data);
        $this->assertArrayHasKey("tagData", $data);
        $this->assertArrayHasKey("dataPortfolio", $data);
        $this->assertEquals("MLapalus", $data["surname"]);
        $this->assertIsArray($data["tagData"]);
        $this->assertIsArray($data["dataPortfolio"]);

        $this->assertInstanceOf(Portfolio::class, $data["dataPortfolio"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["dataPortfolio"][0]->getId());
        $this->assertEquals("IMG1", $data["dataPortfolio"][0]->getImg());
        $this->assertEquals("URL1", $data["dataPortfolio"][0]->getUrl());
        $this->assertIsArray($data["dataPortfolio"][0]->getTags());

        $this->assertInstanceOf(Tag::class, $data["tagData"][0]);
        $this->assertInstanceOf(UuidInterface::class, $data["tagData"][0]->getId());
        $this->assertIsArray($data["tagData"][0]->getPortfolios());
    }
}
