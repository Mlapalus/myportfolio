<?php


namespace App\Infrastructure\Adapter\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\Tag;
use MLapalus\Portfolio\Domain\Gateway\TagGateway;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class TagsRepository  extends ServiceEntityRepository implements TagGateway
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Portfolio::class);
    }

    public function create(Tag $tag): void
    {
        // TODO: Implement create() method.
    }

    public function update(Tag $tag): void
    {
        // TODO: Implement update() method.
    }

    public function getTagById(UuidInterface $id): ?Tag
    {
        // TODO: Implement getTagById() method.
    }

    public function getAll(): array
    {
        return [
                new Tag(Uuid::uuid4() , "PHP", []),
                new Tag(Uuid::uuid4(), "HTML", []),
                new Tag(Uuid::uuid4(), "CSS", []),
                new Tag(Uuid::uuid4(), "Docker", [])
        ];
    }
}