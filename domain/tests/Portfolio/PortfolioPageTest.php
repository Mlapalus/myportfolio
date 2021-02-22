<?php


namespace MLapalus\Portfolio\Domain\Tests\Portfolio;


use MLapalus\Portfolio\Domain\Entity\Portfolio;
use MLapalus\Portfolio\Domain\Entity\Tag;
use MLapalus\Portfolio\Domain\Presenter\PortfolioPresenterInterface;
use MLapalus\Portfolio\Domain\Response\PortfolioResponse;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\PortfolioRepository;
use MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter\TagRepository;
use MLapalus\Portfolio\Domain\UseCase\PortfolioPage;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\UuidInterface;

class PortfolioPageTest extends TestCase
{

    /**
     * @var PortfolioPage
     */
    private PortfolioPage $useCase;

    /**
     * @var PortfolioPresenterInterface
     */
    private PortfolioPresenterInterface $presenter;

    protected function setUp(): void
    {
        $this->presenter = new class() implements PortfolioPresenterInterface {
            public PortfolioResponse $response;

            public function present(PortfolioResponse $response): array
            {
                return $response->getPortfolio();
            }
        };

        $this->useCase = new PortfolioPage();
    }

    public function testSuccessful(): void
    {
        $tag = new TagRepository();
        $portfolio = new PortfolioRepository();

        $response = $this->useCase->execute($portfolio, $tag);
        $data = $this->presenter->present($response);

        $this->assertInstanceOf(PortfolioResponse::class, $response);
        $this->assertIsArray($data);
        $this->assertArrayHasKey("tagData", $data);
        $this->assertArrayHasKey("dataPortfolio", $data);
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