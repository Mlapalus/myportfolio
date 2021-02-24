<?php

namespace App\Infrastructure\Adapter\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\Tag;
use MLapalus\Portfolio\Domain\Gateway\TagGateway;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class TagsRepository
 * @package App\Infrastructure\Adapter\Repository
 */
class TagsRepository extends ServiceEntityRepository implements TagGateway
{
    /**
     * TagsRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Portfolio::class);
    }

    /**
     * @param Tag $tag
     */
    public function create(Tag $tag): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @param Tag $tag
     */
    public function update(Tag $tag): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param UuidInterface $id
     * @return Tag|null
     */
    public function getTagById(UuidInterface $id): ?Tag
    {
        return new Tag(Uuid::uuid4(), "", []);
    }

    /**
     * @return Tag[]
     */
    public function getAll(): array
    {
        return [
                new Tag(Uuid::uuid4(), "PHP", []),
                new Tag(Uuid::uuid4(), "HTML", []),
                new Tag(Uuid::uuid4(), "CSS", []),
                new Tag(Uuid::uuid4(), "Docker", [])
        ];
    }
}
