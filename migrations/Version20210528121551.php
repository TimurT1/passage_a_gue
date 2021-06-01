<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528121551 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `procedure` (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, nom_procedure VARCHAR(255) DEFAULT NULL, detail_procedure LONGTEXT DEFAULT NULL, date_ajout_procedure DATE DEFAULT NULL, INDEX IDX_9C3CBC1F30DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `procedure` ADD CONSTRAINT FK_9C3CBC1F30DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `procedure`');
    }
}
