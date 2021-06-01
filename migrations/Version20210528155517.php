<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528155517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE famille_ouvrage (id INT AUTO_INCREMENT NOT NULL, nom_famille_ouvrage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_ouvrage (id INT AUTO_INCREMENT NOT NULL, famille_ouvrage_id INT NOT NULL, nom_type_ouvrage VARCHAR(255) DEFAULT NULL, INDEX IDX_7A89A42DE12C191F (famille_ouvrage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type_ouvrage ADD CONSTRAINT FK_7A89A42DE12C191F FOREIGN KEY (famille_ouvrage_id) REFERENCES famille_ouvrage (id)');
        $this->addSql('ALTER TABLE passage_ague ADD type_ouvrage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF28DB5290 FOREIGN KEY (type_ouvrage_id) REFERENCES type_ouvrage (id)');
        $this->addSql('CREATE INDEX IDX_B2D8EF28DB5290 ON passage_ague (type_ouvrage_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_ouvrage DROP FOREIGN KEY FK_7A89A42DE12C191F');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF28DB5290');
        $this->addSql('DROP TABLE famille_ouvrage');
        $this->addSql('DROP TABLE type_ouvrage');
        $this->addSql('DROP INDEX IDX_B2D8EF28DB5290 ON passage_ague');
        $this->addSql('ALTER TABLE passage_ague DROP type_ouvrage_id');
    }
}
