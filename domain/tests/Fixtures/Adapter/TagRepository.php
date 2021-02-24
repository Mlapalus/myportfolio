<?php

namespace MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter;

use MLapalus\Portfolio\Domain\Entity\Tag;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class TagRepository implements \MLapalus\Portfolio\Domain\Gateway\TagGateway
{
    /**
     * @inheritDoc
     */
    public function create(Tag $tag): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function update(Tag $tag): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function getTagById(UuidInterface $id): ?Tag
    {
        return new Tag(Uuid::uuid4(), "", []);
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return [
            new Tag(Uuid::uuid4(), "TAG1", [Uuid::uuid4(),Uuid::uuid4()]),
            new Tag(Uuid::uuid4(), "TAG2", [Uuid::uuid4(),Uuid::uuid4(),Uuid::uuid4()]),
            new Tag(Uuid::uuid4(), "TAG3", [Uuid::uuid4()]),
            new Tag(Uuid::uuid4(), "TAG4", [Uuid::uuid4(),Uuid::uuid4()]),
            new Tag(Uuid::uuid4(), "TAG5", [Uuid::uuid4(),Uuid::uuid4()]),
        ];
    }
}
