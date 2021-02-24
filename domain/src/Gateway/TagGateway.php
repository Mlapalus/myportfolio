<?php

namespace MLapalus\Portfolio\Domain\Gateway;

use MLapalus\Portfolio\Domain\Entity\Tag;
use Ramsey\Uuid\UuidInterface;

/**
 * Interface PortfolioGateway
 * @package MLapalus\Domain\Gateway
 */
interface TagGateway
{
    /**
     * @param Tag $tag
     */
    public function create(Tag $tag): void;

    /**
     * @param Tag $tag
     */
    public function update(Tag $tag): void;

    /**
     * @param UuidInterface $id
     * @return Tag|null
     */
    public function getTagById(UuidInterface $id): ?Tag;

    /**
     * @return array
     */
    public function getAll(): array;
}
