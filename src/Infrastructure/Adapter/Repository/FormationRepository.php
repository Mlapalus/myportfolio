<?php


namespace App\Infrastructure\Adapter\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MLapalus\Portfolio\Domain\Entity\Formation;
use MLapalus\Portfolio\Domain\Gateway\FormationGateway;
use Ramsey\Uuid\UuidInterface;

class FormationRepository extends ServiceEntityRepository implements FormationGateway
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, \App\Infrastructure\Doctrine\Entity\Formation::class);
    }

    public function create(Formation $formation): void
    {
        // TODO: Implement create() method.
    }

    public function update(Formation $formation): void
    {
        // TODO: Implement update() method.
    }

    public function getFormationById(UuidInterface $id): ?Formation
    {
        // TODO: Implement getFormationById() method.
    }

    public function getAll(): array
    {
        return $this->findAll();
    }
}