<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250123115034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mot_cle DROP CONSTRAINT FK_AF92D22A84337261');
        $this->addSql('ALTER TABLE mot_cle ADD CONSTRAINT FK_AF92D22A84337261 FOREIGN KEY (index_id) REFERENCES index (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE mot_cle DROP CONSTRAINT fk_af92d22a84337261');
        $this->addSql('ALTER TABLE mot_cle ADD CONSTRAINT fk_af92d22a84337261 FOREIGN KEY (index_id) REFERENCES index (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
