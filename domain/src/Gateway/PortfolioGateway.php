<?php

namespace MLapalus\Portfolio\Domain\Gateway;

use MLapalus\Portfolio\Domain\Entity\Portfolio;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface PortfolioGateway
 * @package MLapalus\Domain\Gateway
 */
interface PortfolioGateway
{
    /**
     * @param Portfolio $portfolio
     */
    public function create(Portfolio $portfolio): void;

    /**
     * @param Portfolio $portfolio
     */
    public function update(Portfolio $portfolio): void;

    /**
     * @param UuidInterface $id
     * @return Portfolio|null
     */
    public function getPortfolioById(UuidInterface $id): ?Portfolio;

    /**
     * @return array
     */
    public function getAll(): array;
}
