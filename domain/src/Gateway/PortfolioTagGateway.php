<?php


namespace MLapalus\Portfolio\Domain\Gateway;


use MLapalus\Portfolio\Domain\Entity\PortfolioTag;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface PortfolioGateway
 * @package MLapalus\Domain\Gateway
 */
interface PortfolioTagGateway
{
    /**
     * @param PortfolioTag $tag
     */
    public function create(PortfolioTag $tag): void;

    /**
     * @param PortfolioTag $tag
     */
    public function update(PortfolioTag $tag): void;

    /**
     * @param UuidInterface $id
     * @return PortfolioTag|null
     */
    public function getTagById(UuidInterface $id): ?PortfolioTag;

    /**
     * @return mixed
     */
    public function getAll(): array;
}