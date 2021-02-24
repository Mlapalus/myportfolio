<?php

namespace MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter;

use MLapalus\Portfolio\Domain\Entity\Formation;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class FormationRepository implements \MLapalus\Portfolio\Domain\Gateway\FormationGateway
{
    /**
     * @inheritDoc
     */
    public function create(Formation $formation): void
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function update(Formation $formation): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function getFormationById(UuidInterface $id): ?Formation
    {
        return new Formation(
            Uuid::uuid4(),
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            new \DateTime(),
            new \DateTime()
        );
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return [
            new Formation(
                Uuid::uuid4(),
                "Titre1",
                "School1",
                "Grd1",
                "IMG1",
                "PDF1",
                "URL1",
                "Description1",
                new \DateTime(),
                new \DateTime()
            ),
            new Formation(
                Uuid::uuid4(),
                "Titre2",
                "School2",
                "Grd2",
                "IMG2",
                "PDF2",
                "URL2",
                "Description2",
                new \DateTime(),
                new \DateTime()
            )
        ];
    }
}
