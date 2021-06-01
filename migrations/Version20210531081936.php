<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531081936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cours_eau (id INT AUTO_INCREMENT NOT NULL, nom_cours_eau VARCHAR(255) DEFAULT NULL, description_cours_eau LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, nom_localisation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE passage_ague ADD cours_eau_id INT NOT NULL, ADD localisation_id INT NOT NULL');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF2E7C83C53 FOREIGN KEY (cours_eau_id) REFERENCES cours_eau (id)');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF2C68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('CREATE INDEX IDX_B2D8EF2E7C83C53 ON passage_ague (cours_eau_id)');
        $this->addSql('CREATE INDEX IDX_B2D8EF2C68BE09C ON passage_ague (localisation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF2E7C83C53');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF2C68BE09C');
        $this->addSql('DROP TABLE cours_eau');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP INDEX IDX_B2D8EF2E7C83C53 ON passage_ague');
        $this->addSql('DROP INDEX IDX_B2D8EF2C68BE09C ON passage_ague');
        $this->addSql('ALTER TABLE passage_ague DROP cours_eau_id, DROP localisation_id');
    }
}
