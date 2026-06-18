<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241111175001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fiche ALTER statut_id DROP NOT NULL');
        $this->addSql('ALTER TABLE mot_cle ALTER id DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE mot_cle_id_seq');
        $this->addSql('SELECT setval(\'mot_cle_id_seq\', (SELECT MAX(id) FROM mot_cle))');
        $this->addSql('ALTER TABLE mot_cle ALTER id SET DEFAULT nextval(\'mot_cle_id_seq\')');
        $this->addSql('ALTER TABLE fiche ALTER statut_id SET NOT NULL');
    }
}
