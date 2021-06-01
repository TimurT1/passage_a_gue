<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528120550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE autre_info (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, titre_autre_info VARCHAR(255) DEFAULT NULL, detail_autre_info LONGTEXT DEFAULT NULL, INDEX IDX_3CC1F77230DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_autre_info (id INT AUTO_INCREMENT NOT NULL, autre_info_id INT NOT NULL, photo_autre_info VARCHAR(255) DEFAULT NULL, description_photo_autre_info LONGTEXT DEFAULT NULL, INDEX IDX_70A5197A86AAFC6E (autre_info_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE autre_info ADD CONSTRAINT FK_3CC1F77230DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE photo_autre_info ADD CONSTRAINT FK_70A5197A86AAFC6E FOREIGN KEY (autre_info_id) REFERENCES autre_info (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photo_autre_info DROP FOREIGN KEY FK_70A5197A86AAFC6E');
        $this->addSql('DROP TABLE autre_info');
        $this->addSql('DROP TABLE photo_autre_info');
    }
}
