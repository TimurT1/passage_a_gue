<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531083013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE route (id INT AUTO_INCREMENT NOT NULL, route VARCHAR(255) DEFAULT NULL, numero_route VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE route_passage_ague (route_id INT NOT NULL, passage_ague_id INT NOT NULL, INDEX IDX_61A3CE0034ECB4E6 (route_id), INDEX IDX_61A3CE0030DE8B35 (passage_ague_id), PRIMARY KEY(route_id, passage_ague_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0034ECB4E6 FOREIGN KEY (route_id) REFERENCES route (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0030DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE route_passage_ague DROP FOREIGN KEY FK_61A3CE0034ECB4E6');
        $this->addSql('DROP TABLE route');
        $this->addSql('DROP TABLE route_passage_ague');
    }
}
