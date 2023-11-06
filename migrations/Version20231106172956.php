<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106172956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE membre (GroupID INT NOT NULL, UserID INT NOT NULL, INDEX IDX_F6B4FB29195291E4 (GroupID), INDEX IDX_F6B4FB2958746832 (UserID), PRIMARY KEY(GroupID, UserID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (idH INT AUTO_INCREMENT NOT NULL, numC BIGINT NOT NULL, dateOrder DATE NOT NULL, Product VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, PRIMARY KEY(idH)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lineorder (id_o INT AUTO_INCREMENT NOT NULL, id_c BIGINT DEFAULT NULL, productName VARCHAR(50) NOT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX fk_idC (id_c), PRIMARY KEY(id_o)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (idPdts BIGINT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, qte INT NOT NULL, categ VARCHAR(50) NOT NULL, matiere VARCHAR(50) NOT NULL, description VARCHAR(350) NOT NULL, image VARCHAR(1000) NOT NULL, PRIMARY KEY(idPdts)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id BIGINT AUTO_INCREMENT NOT NULL, contenu VARCHAR(150) NOT NULL, etat VARCHAR(15) NOT NULL, reponse VARCHAR(150) DEFAULT NULL, senderid BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tempmail (id INT AUTO_INCREMENT NOT NULL, Email VARCHAR(30) NOT NULL, idGroup INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(40) NOT NULL, prenom VARCHAR(40) NOT NULL, date_naissance VARCHAR(10) NOT NULL, CIN VARCHAR(10) NOT NULL, age INT NOT NULL, pic VARCHAR(500) NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29195291E4 FOREIGN KEY (GroupID) REFERENCES groups (Gid)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2958746832 FOREIGN KEY (UserID) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE lineorder ADD CONSTRAINT FK_2341105AC12C7510 FOREIGN KEY (id_c) REFERENCES commande (id_c)');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E929C97F2 FOREIGN KEY (idUser2) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E99B95C648 FOREIGN KEY (idUser1) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE groups CHANGE nom nom VARCHAR(20) NOT NULL, CHANGE logo logo VARCHAR(500) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E929C97F2');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E99B95C648');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29195291E4');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2958746832');
        $this->addSql('ALTER TABLE lineorder DROP FOREIGN KEY FK_2341105AC12C7510');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE lineorder');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE tempmail');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE groups CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE logo logo VARCHAR(255) NOT NULL');
    }
}
