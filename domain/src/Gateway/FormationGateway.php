<?php


namespace MLapalus\Portfolio\Domain\Gateway;


use MLapalus\Portfolio\Domain\Entity\Formation;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface FormationGateway
 * @package MLapalus\Domain\Gateway
 */
interface FormationGateway
{
    /**
     * @param Formation $formation
     */
    public function create(Formation $formation): void;

    /**
     * @param Formation $formation
     */
    public function update(Formation $formation): void;

    /**
     * @param UuidInterface $id
     * @return Formation|null
     */
    public function getFormationById(UuidInterface $id): ?Formation;

    /**
     * @return mixed
     */
    public function getAll(): array;
}