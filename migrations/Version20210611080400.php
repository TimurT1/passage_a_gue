<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611080400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE autre_info (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, titre_autre_info VARCHAR(255) DEFAULT NULL, detail_autre_info LONGTEXT DEFAULT NULL, INDEX IDX_3CC1F77230DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_id INT NOT NULL, id_passage_ague_id INT NOT NULL, date_creation_commentaire DATE DEFAULT NULL, titre_commentaire VARCHAR(255) DEFAULT NULL, texte_commentaire LONGTEXT DEFAULT NULL, INDEX IDX_67F068BCC6EE5C49 (id_utilisateur_id), INDEX IDX_67F068BCD98048BD (id_passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_eau (id INT AUTO_INCREMENT NOT NULL, nom_cours_eau VARCHAR(255) DEFAULT NULL, description_cours_eau LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, nom_departement VARCHAR(255) DEFAULT NULL, numero_departement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, id_type_equipement_id INT NOT NULL, passage_ague_id INT DEFAULT NULL, nom_equipement VARCHAR(255) DEFAULT NULL, photo_equipement VARCHAR(255) DEFAULT NULL, detail_equipement LONGTEXT DEFAULT NULL, etat_vestuste LONGTEXT DEFAULT NULL, INDEX IDX_B8B4C6F373A00AC6 (id_type_equipement_id), INDEX IDX_B8B4C6F330DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE famille_ouvrage (id INT AUTO_INCREMENT NOT NULL, nom_famille_ouvrage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, nom_localisation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passage_ague (id INT AUTO_INCREMENT NOT NULL, id_utilisateur_id INT DEFAULT NULL, type_ouvrage_id INT DEFAULT NULL, cours_eau_id INT NOT NULL, localisation_id INT NOT NULL, gps_x DOUBLE PRECISION DEFAULT NULL, gps_y DOUBLE PRECISION DEFAULT NULL, frequence_submersion VARCHAR(255) DEFAULT NULL, largeur_passage NUMERIC(10, 0) DEFAULT NULL, longueur_passage NUMERIC(10, 0) DEFAULT NULL, trafic_journalier INT DEFAULT NULL, bool_limitation_respectee TINYINT(1) NOT NULL, bool_archive TINYINT(1) NOT NULL, taux_accidentalite VARCHAR(255) DEFAULT NULL, INDEX IDX_B2D8EF2C6EE5C49 (id_utilisateur_id), INDEX IDX_B2D8EF28DB5290 (type_ouvrage_id), INDEX IDX_B2D8EF2E7C83C53 (cours_eau_id), INDEX IDX_B2D8EF2C68BE09C (localisation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_autre_info (id INT AUTO_INCREMENT NOT NULL, autre_info_id INT NOT NULL, photo_autre_info VARCHAR(255) DEFAULT NULL, description_photo_autre_info LONGTEXT DEFAULT NULL, INDEX IDX_70A5197A86AAFC6E (autre_info_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_passage (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, photo_passage VARCHAR(255) DEFAULT NULL, description_passage LONGTEXT DEFAULT NULL, INDEX IDX_1EC598EA30DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piece_jointe (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT NOT NULL, titre_piece_jointe VARCHAR(255) DEFAULT NULL, description_piece_jointe LONGTEXT DEFAULT NULL, chemin_piece_jointe VARCHAR(255) DEFAULT NULL, INDEX IDX_AB5111D430DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `procedure` (id INT AUTO_INCREMENT NOT NULL, passage_ague_id INT DEFAULT NULL, nom_procedure VARCHAR(255) DEFAULT NULL, detail_procedure LONGTEXT DEFAULT NULL, date_ajout_procedure DATE DEFAULT NULL, INDEX IDX_9C3CBC1F30DE8B35 (passage_ague_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE route (id INT AUTO_INCREMENT NOT NULL, ville_id INT NOT NULL, route VARCHAR(255) DEFAULT NULL, numero_route VARCHAR(255) DEFAULT NULL, INDEX IDX_2C42079A73F0036 (ville_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE route_passage_ague (route_id INT NOT NULL, passage_ague_id INT NOT NULL, INDEX IDX_61A3CE0034ECB4E6 (route_id), INDEX IDX_61A3CE0030DE8B35 (passage_ague_id), PRIMARY KEY(route_id, passage_ague_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE submersion (id INT AUTO_INCREMENT NOT NULL, nom_submersion VARCHAR(255) DEFAULT NULL, date_submersion DATE DEFAULT NULL, description_submersion LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE submersion_passage_ague (submersion_id INT NOT NULL, passage_ague_id INT NOT NULL, INDEX IDX_F9531511CB63BAB9 (submersion_id), INDEX IDX_F953151130DE8B35 (passage_ague_id), PRIMARY KEY(submersion_id, passage_ague_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_equipement (id INT AUTO_INCREMENT NOT NULL, nom_type_equipement VARCHAR(255) DEFAULT NULL, description_type_equipement LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_ouvrage (id INT AUTO_INCREMENT NOT NULL, famille_ouvrage_id INT NOT NULL, nom_type_ouvrage VARCHAR(255) DEFAULT NULL, INDEX IDX_7A89A42DE12C191F (famille_ouvrage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(255) NOT NULL, prenom_utilisateur VARCHAR(255) NOT NULL, pseudo_utilisateur VARCHAR(255) NOT NULL, photo_utilisateur VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_passage_ague (user_id INT NOT NULL, passage_ague_id INT NOT NULL, INDEX IDX_8BE1F2F0A76ED395 (user_id), INDEX IDX_8BE1F2F030DE8B35 (passage_ague_id), PRIMARY KEY(user_id, passage_ague_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, departement_id INT NOT NULL, nom_ville VARCHAR(255) DEFAULT NULL, code_postal INT DEFAULT NULL, numero_insee VARCHAR(255) DEFAULT NULL, INDEX IDX_43C3D9C3CCF9E01E (departement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE autre_info ADD CONSTRAINT FK_3CC1F77230DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCD98048BD FOREIGN KEY (id_passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F373A00AC6 FOREIGN KEY (id_type_equipement_id) REFERENCES type_equipement (id)');
        $this->addSql('ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F330DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF2C6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF28DB5290 FOREIGN KEY (type_ouvrage_id) REFERENCES type_ouvrage (id)');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF2E7C83C53 FOREIGN KEY (cours_eau_id) REFERENCES cours_eau (id)');
        $this->addSql('ALTER TABLE passage_ague ADD CONSTRAINT FK_B2D8EF2C68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE photo_autre_info ADD CONSTRAINT FK_70A5197A86AAFC6E FOREIGN KEY (autre_info_id) REFERENCES autre_info (id)');
        $this->addSql('ALTER TABLE photo_passage ADD CONSTRAINT FK_1EC598EA30DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE piece_jointe ADD CONSTRAINT FK_AB5111D430DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE `procedure` ADD CONSTRAINT FK_9C3CBC1F30DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id)');
        $this->addSql('ALTER TABLE route ADD CONSTRAINT FK_2C42079A73F0036 FOREIGN KEY (ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0034ECB4E6 FOREIGN KEY (route_id) REFERENCES route (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE route_passage_ague ADD CONSTRAINT FK_61A3CE0030DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F9531511CB63BAB9 FOREIGN KEY (submersion_id) REFERENCES submersion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE submersion_passage_ague ADD CONSTRAINT FK_F953151130DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_ouvrage ADD CONSTRAINT FK_7A89A42DE12C191F FOREIGN KEY (famille_ouvrage_id) REFERENCES famille_ouvrage (id)');
        $this->addSql('ALTER TABLE user_passage_ague ADD CONSTRAINT FK_8BE1F2F0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_passage_ague ADD CONSTRAINT FK_8BE1F2F030DE8B35 FOREIGN KEY (passage_ague_id) REFERENCES passage_ague (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C3CCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photo_autre_info DROP FOREIGN KEY FK_70A5197A86AAFC6E');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF2E7C83C53');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C3CCF9E01E');
        $this->addSql('ALTER TABLE type_ouvrage DROP FOREIGN KEY FK_7A89A42DE12C191F');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF2C68BE09C');
        $this->addSql('ALTER TABLE autre_info DROP FOREIGN KEY FK_3CC1F77230DE8B35');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCD98048BD');
        $this->addSql('ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F330DE8B35');
        $this->addSql('ALTER TABLE photo_passage DROP FOREIGN KEY FK_1EC598EA30DE8B35');
        $this->addSql('ALTER TABLE piece_jointe DROP FOREIGN KEY FK_AB5111D430DE8B35');
        $this->addSql('ALTER TABLE `procedure` DROP FOREIGN KEY FK_9C3CBC1F30DE8B35');
        $this->addSql('ALTER TABLE route_passage_ague DROP FOREIGN KEY FK_61A3CE0030DE8B35');
        $this->addSql('ALTER TABLE submersion_passage_ague DROP FOREIGN KEY FK_F953151130DE8B35');
        $this->addSql('ALTER TABLE user_passage_ague DROP FOREIGN KEY FK_8BE1F2F030DE8B35');
        $this->addSql('ALTER TABLE route_passage_ague DROP FOREIGN KEY FK_61A3CE0034ECB4E6');
        $this->addSql('ALTER TABLE submersion_passage_ague DROP FOREIGN KEY FK_F9531511CB63BAB9');
        $this->addSql('ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F373A00AC6');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF28DB5290');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC6EE5C49');
        $this->addSql('ALTER TABLE passage_ague DROP FOREIGN KEY FK_B2D8EF2C6EE5C49');
        $this->addSql('ALTER TABLE user_passage_ague DROP FOREIGN KEY FK_8BE1F2F0A76ED395');
        $this->addSql('ALTER TABLE route DROP FOREIGN KEY FK_2C42079A73F0036');
        $this->addSql('DROP TABLE autre_info');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE cours_eau');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE equipement');
        $this->addSql('DROP TABLE famille_ouvrage');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE passage_ague');
        $this->addSql('DROP TABLE photo_autre_info');
        $this->addSql('DROP TABLE photo_passage');
        $this->addSql('DROP TABLE piece_jointe');
        $this->addSql('DROP TABLE `procedure`');
        $this->addSql('DROP TABLE route');
        $this->addSql('DROP TABLE route_passage_ague');
        $this->addSql('DROP TABLE submersion');
        $this->addSql('DROP TABLE submersion_passage_ague');
        $this->addSql('DROP TABLE type_equipement');
        $this->addSql('DROP TABLE type_ouvrage');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_passage_ague');
        $this->addSql('DROP TABLE ville');
    }
}
