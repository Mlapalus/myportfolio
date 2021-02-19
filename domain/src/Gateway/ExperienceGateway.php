<?php


namespace MLapalus\Portfolio\Domain\Gateway;


use MLapalus\Portfolio\Domain\Entity\Experience;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface ExperienceGateway
 * @package MLapalus\Domain\Gateway
 */
interface ExperienceGateway
{
    /**
     * @param Experience $experience
     */
    public function create(Experience $experience): void;

    /**
     * @param Experience $experience
     */
    public function update(Experience $experience): void;

    /**
     * @param UuidInterface $id
     * @return Experience|null
     */
    public function getExperienceById(UuidInterface $id): ?Experience;

    /**
     * @return mixed
     */
    public function getAll(): array;
}