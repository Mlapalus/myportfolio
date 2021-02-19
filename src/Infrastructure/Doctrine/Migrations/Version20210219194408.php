<?php

declare(strict_types=1);

namespace App\Infrastructure\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210219194408 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experience ADD url VARCHAR(255) NOT NULL, ADD img VARCHAR(255) NOT NULL, ADD pdf VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation ADD img VARCHAR(255) NOT NULL, ADD pdf VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE portfolio ADD img VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experience DROP url, DROP img, DROP pdf');
        $this->addSql('ALTER TABLE formation DROP img, DROP pdf');
        $this->addSql('ALTER TABLE portfolio DROP img');
    }
}
