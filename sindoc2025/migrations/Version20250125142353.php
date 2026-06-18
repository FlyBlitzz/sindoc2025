<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250125142353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historique ADD fiche_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD livre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD index_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD statut_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD mot_cle_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE historique DROP fiche_id');
        $this->addSql('ALTER TABLE historique DROP livre_id');
        $this->addSql('ALTER TABLE historique DROP index_id');
        $this->addSql('ALTER TABLE historique DROP statut_id');
        $this->addSql('ALTER TABLE historique DROP mot_cle_id');
    }
}
