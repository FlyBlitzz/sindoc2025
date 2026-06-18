<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250125141850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historique DROP CONSTRAINT fk_edbfd5ecdf522508');
        $this->addSql('ALTER TABLE historique DROP CONSTRAINT fk_edbfd5ec37d925cb');
        $this->addSql('ALTER TABLE historique DROP CONSTRAINT fk_edbfd5ec84337261');
        $this->addSql('ALTER TABLE historique DROP CONSTRAINT fk_edbfd5ecf6203804');
        $this->addSql('ALTER TABLE historique DROP CONSTRAINT fk_edbfd5ecfe94535c');
        $this->addSql('DROP INDEX idx_edbfd5ecfe94535c');
        $this->addSql('DROP INDEX idx_edbfd5ecf6203804');
        $this->addSql('DROP INDEX idx_edbfd5ec84337261');
        $this->addSql('DROP INDEX idx_edbfd5ec37d925cb');
        $this->addSql('DROP INDEX idx_edbfd5ecdf522508');
        $this->addSql('ALTER TABLE historique ADD data JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE historique ADD fiche_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD livre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD index_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD statut_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique ADD mot_cle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE historique DROP data');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT fk_edbfd5ecdf522508 FOREIGN KEY (fiche_id) REFERENCES fiche (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT fk_edbfd5ec37d925cb FOREIGN KEY (livre_id) REFERENCES livre (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT fk_edbfd5ec84337261 FOREIGN KEY (index_id) REFERENCES index (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT fk_edbfd5ecf6203804 FOREIGN KEY (statut_id) REFERENCES statut (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT fk_edbfd5ecfe94535c FOREIGN KEY (mot_cle_id) REFERENCES mot_cle (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_edbfd5ecfe94535c ON historique (mot_cle_id)');
        $this->addSql('CREATE INDEX idx_edbfd5ecf6203804 ON historique (statut_id)');
        $this->addSql('CREATE INDEX idx_edbfd5ec84337261 ON historique (index_id)');
        $this->addSql('CREATE INDEX idx_edbfd5ec37d925cb ON historique (livre_id)');
        $this->addSql('CREATE INDEX idx_edbfd5ecdf522508 ON historique (fiche_id)');
    }
}
