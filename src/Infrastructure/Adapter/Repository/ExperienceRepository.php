<?php

namespace App\Infrastructure\Adapter\Repository;

use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\Experience;
use MLapalus\Portfolio\Domain\Gateway\ExperienceGateway;
use Ramsey\Uuid\Nonstandard\Uuid;
use Ramsey\Uuid\UuidInterface;

class ExperienceRepository extends ServiceEntityRepository implements ExperienceGateway
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Experience::class);
    }

    public function create(Experience $experience): void
    {
        // TODO: Implement create() method.
    }

    public function update(Experience $experience): void
    {
        // TODO: Implement update() method.
    }

    public function getExperienceById(UuidInterface $id): ?Experience
    {
        return new Experience(
            Uuid::uuid4(),
            "",
            "",
            "",
            "",
            "",
            "",
            new DateTime(),
            new DateTime()
        );
    }

    public function getAll(): array
    {
        return $this->findAll();
    }
}
