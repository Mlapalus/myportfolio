<?php


namespace MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter;


use MLapalus\Portfolio\Domain\Entity\Portfolio;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class PortfolioRepository implements \MLapalus\Portfolio\Domain\Gateway\PortfolioGateway
{

    /**
     * @inheritDoc
     */
    public function create(Portfolio $portfolio): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function update(Portfolio $portfolio): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function getPortfolioById(UuidInterface $id): ?Portfolio
    {
        // TODO: Implement getPortfolioById() method.
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
       return [
           new Portfolio(
               Uuid::uuid4(),
               "Portfolio1",
               "URL1",
               "Description1",
               "IMG1",
               new \DateTime(),
               (new TagRepository())->getAll()),
           new Portfolio(
               Uuid::uuid4(),
               "Portfolio2",
               "URL2",
               "Description2",
               "IMG2",
               new \DateTime(),
               (new TagRepository())->getAll()),
       ];
    }
}