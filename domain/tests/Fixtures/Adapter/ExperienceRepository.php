<?php

namespace MLapalus\Portfolio\Domain\Tests\Fixtures\Adapter;

use DateTime;
use MLapalus\Portfolio\Domain\Entity\Experience;
use MLapalus\Portfolio\Domain\Gateway\ExperienceGateway;
use Ramsey\Uuid\Nonstandard\Uuid;
use Ramsey\Uuid\UuidInterface;

class ExperienceRepository implements ExperienceGateway
{

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
        return [
            new Experience(
                Uuid::uuid4(),
                'Exp1',
                'Cie1',
                'Description1',
                'URL1',
                'PDF1',
                'IMG1',
                new DateTime(),
                new DateTime()
            ),
            new Experience(
                Uuid::uuid4(),
                'Exp2',
                'Cie2',
                'Description2',
                'URL2',
                'PDF2',
                'IMG2',
                new DateTime(),
                new DateTime()
            ),
            new Experience(
                Uuid::uuid4(),
                'Exp3',
                'Cie3',
                'Description3',
                'URL3',
                'PDF3',
                'IMG3',
                new DateTime(),
                new DateTime()
            )
        ];
    }
}
