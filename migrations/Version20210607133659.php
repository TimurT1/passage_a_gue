<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210607133659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F3D98048BD');
        $this->addSql('DROP INDEX id_passage_ague_id ON equipement');
        $this->addSql('DROP INDEX IDX_B8B4C6F3D98048BD ON equipement');
        $this->addSql('ALTER TABLE equipement DROP id_passage_ague_id');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0034ECB4E6 FOREIGN KEY (route_id) REFERENCES route (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0030DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F9531511CB63BAB9 FOREIGN KEY (submersion_id) REFERENCES submersion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F953151130DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipement ADD id_passage_ague_id INT NOT NULL');
        $this->addSql('ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F3D98048BD FOREIGN KEY (id_passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('CREATE UNIQUE INDEX id_passage_ague_id ON equipement (id_passage_ague_id)');
        $this->addSql('CREATE INDEX IDX_B8B4C6F3D98048BD ON equipement (id_passage_ague_id)');
        $this->addSql('ALTER TABLE route_passage_ague DROP FOREIGN KEY FK_61A3CE0034ECB4E6');
        $this->addSql('ALTER TABLE route_passage_ague DROP FOREIGN KEY FK_61A3CE0030DE8B35');
        $this->addSql('ALTER TABLE submersion_passage_ague DROP FOREIGN KEY FK_F9531511CB63BAB9');
        $this->addSql('ALTER TABLE submersion_passage_ague DROP FOREIGN KEY FK_F953151130DE8B35');
    }
}
