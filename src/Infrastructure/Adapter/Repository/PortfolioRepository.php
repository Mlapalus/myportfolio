<?php

namespace App\Infrastructure\Adapter\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\Portfolio;
use MLapalus\Portfolio\Domain\Gateway\PortfolioGateway;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PortfolioRepository extends ServiceEntityRepository implements PortfolioGateway
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Portfolio::class);
    }

    public function create(Portfolio $portfolio): void
    {
        // TODO: Implement create() method.
    }

    public function update(Portfolio $portfolio): void
    {
        // TODO: Im
    }

    public function getPortfolioById(UuidInterface $id): ?Portfolio
    {
        return new Portfolio(
            Uuid::uuid4(),
            "",
            "",
            "",
            "",
            new \DateTime(),
            []
        );
    }

    public function getAll(): array
    {
        return $this->findAll();
    }
}
