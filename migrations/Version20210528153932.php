<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210528153932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE piece_jointe (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, titre_piece_jointe VARCHAR(255) DEFAULT NULL, description_piece_jointe LONGTEXT DEFAULT NULL, chemin_piece_jointe VARCHAR(255) DEFAULT NULL, INDEX IDX_AB5111D430DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE submersion (id INT AUTO_INCREMENT NOT NULL, nom_submersion VARCHAR(255) DEFAULT NULL, date_submersion DATE DEFAULT NULL, description_submersion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE submersion_passage_ague (submersion_id INT NOT NULL, passage_ague_id INT NOT NULL, INDEX IDX_F9531511CB63BAB9 (submersion_id), INDEX IDX_F953151130DE8B35 (passage_ague_id), PRIMARY KEY(submersion_id, passage_ague_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D430DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F9531511CB63BAB9 FOREIGN KEY (submersion_id) REFERENCES submersion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F953151130DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE submersion_passage_ague DROP FOREIGN KEY FK_F9531511CB63BAB9');
        $this->addSql('DROP TABLE piece_jointe');
        $this->addSql('DROP TABLE submersion');
        $this->addSql('DROP TABLE submersion_passage_ague');
    }
}
