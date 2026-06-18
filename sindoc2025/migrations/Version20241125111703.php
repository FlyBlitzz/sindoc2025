<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241125111703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE index_auth_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE index_auth (id INT NOT NULL, user_id INT NOT NULL, index_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_535E680AA76ED395 ON index_auth (user_id)');
        $this->addSql('CREATE INDEX IDX_535E680A84337261 ON index_auth (index_id)');
        $this->addSql('ALTER TABLE index_auth ADD CONSTRAINT FK_535E680AA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE index_auth ADD CONSTRAINT FK_535E680A84337261 FOREIGN KEY (index_id) REFERENCES index (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE index_auth_id_seq CASCADE');
        $this->addSql('ALTER TABLE index_auth DROP CONSTRAINT FK_535E680AA76ED395');
        $this->addSql('ALTER TABLE index_auth DROP CONSTRAINT FK_535E680A84337261');
        $this->addSql('DROP TABLE index_auth');
    }
}
