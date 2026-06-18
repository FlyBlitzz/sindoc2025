<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250128173851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE livre ADD visible SMALLINT DEFAULT 1');
        $this->addSql('ALTER TABLE index ADD visible SMALLINT DEFAULT 1');

    }

    public function down(Schema $schema): void
    {
        }
}
