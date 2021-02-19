<?php


namespace App\Infrastructure\Adapter\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\PortfolioTag;
use MLapalus\Portfolio\Domain\Gateway\PortfolioTagGateway;
use Ramsey\Uuid\UuidInterface;

class TagsRepository  extends ServiceEntityRepository implements PortfolioTagGateway
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Portfolio::class);
    }

    public function create(PortfolioTag $tag): void
    {
        // TODO: Implement create() method.
    }

    public function update(PortfolioTag $tag): void
    {
        // TODO: Implement update() method.
    }

    public function getTagById(UuidInterface $id): ?PortfolioTag
    {
        // TODO: Implement getTagById() method.
    }

    public function getAll(): array
    {
        return [
            [
                "id" => 0,
                "tag" => "PHP"
            ],
            [
                "id" => 1,
                "tag" => "HTML"
            ],
            [
                "id" => 2,
                "tag" => "CSS"
            ],
            [
                "id" => 3,
                "tag" => "Docker"
            ]

        ];
    }
}