<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241128145314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE index_auth_id_seq CASCADE');
        $this->addSql('ALTER TABLE index_auth DROP CONSTRAINT index_auth_pkey');
        $this->addSql('ALTER TABLE index_auth DROP id');
        $this->addSql('ALTER TABLE index_auth ADD PRIMARY KEY (user_id, index_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE index_auth_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP INDEX index_auth_pkey');
        $this->addSql('ALTER TABLE index_auth ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE index_auth ADD PRIMARY KEY (id)');
    }
}
