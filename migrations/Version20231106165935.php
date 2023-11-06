<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106165935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id_c BIGINT AUTO_INCREMENT NOT NULL, nomC VARCHAR(50) NOT NULL, id_client BIGINT NOT NULL, adresse VARCHAR(50) NOT NULL, date DATE NOT NULL, numTel INT NOT NULL, email VARCHAR(50) NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_c)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id BIGINT AUTO_INCREMENT NOT NULL, iduser BIGINT NOT NULL, idformation BIGINT NOT NULL, text VARCHAR(250) NOT NULL, date DATE NOT NULL, evaluation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conversation (idconv INT NOT NULL, Date_MSG DATETIME NOT NULL, Msg TEXT DEFAULT NULL, idUser2 INT NOT NULL, idUser1 INT NOT NULL, INDEX idUser2 (idUser2), INDEX idUser1 (idUser1), PRIMARY KEY(idconv, Date_MSG, idUser2, idUser1)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eventadmin (id_a INT AUTO_INCREMENT NOT NULL, nom_a VARCHAR(30) NOT NULL, date_a VARCHAR(30) NOT NULL, lieu_a VARCHAR(30) NOT NULL, description_a VARCHAR(100) NOT NULL, image_a MEDIUMTEXT NOT NULL, prix_a INT NOT NULL, path_qr VARCHAR(255) NOT NULL, PRIMARY KEY(id_a)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eventuser (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, date VARCHAR(30) NOT NULL, lieu VARCHAR(30) NOT NULL, description VARCHAR(100) NOT NULL, image VARCHAR(100) NOT NULL, prix INT NOT NULL, path_qr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, categories VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION NOT NULL, duree VARCHAR(50) NOT NULL, description VARCHAR(1000) NOT NULL, video VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groups (Gid INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) NOT NULL, Size INT NOT NULL, logo VARCHAR(500) NOT NULL, PRIMARY KEY(Gid)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (GroupID INT NOT NULL, UserID INT NOT NULL, INDEX IDX_F6B4FB29195291E4 (GroupID), INDEX IDX_F6B4FB2958746832 (UserID), PRIMARY KEY(GroupID, UserID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (idH INT AUTO_INCREMENT NOT NULL, numC BIGINT NOT NULL, dateOrder DATE NOT NULL, Product VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, PRIMARY KEY(idH)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lineorder (id_o INT AUTO_INCREMENT NOT NULL, id_c BIGINT DEFAULT NULL, productName VARCHAR(50) NOT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX fk_idC (id_c), PRIMARY KEY(id_o)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), INDEX IDX_75EA56E0FB7336F0 (queue_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (idPdts BIGINT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, qte INT NOT NULL, categ VARCHAR(50) NOT NULL, matiere VARCHAR(50) NOT NULL, description VARCHAR(350) NOT NULL, image VARCHAR(1000) NOT NULL, PRIMARY KEY(idPdts)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id BIGINT AUTO_INCREMENT NOT NULL, contenu VARCHAR(150) NOT NULL, etat VARCHAR(15) NOT NULL, reponse VARCHAR(150) DEFAULT NULL, senderid BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tempmail (id INT AUTO_INCREMENT NOT NULL, Email VARCHAR(30) NOT NULL, idGroup INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(40) NOT NULL, prenom VARCHAR(40) NOT NULL, date_naissance VARCHAR(10) NOT NULL, CIN VARCHAR(10) NOT NULL, age INT NOT NULL, pic VARCHAR(500) NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E929C97F2 FOREIGN KEY (idUser2) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E99B95C648 FOREIGN KEY (idUser1) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29195291E4 FOREIGN KEY (GroupID) REFERENCES groups (Gid)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2958746832 FOREIGN KEY (UserID) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE lineorder ADD CONSTRAINT FK_2341105AC12C7510 FOREIGN KEY (id_c) REFERENCES commande (id_c)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E929C97F2');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E99B95C648');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29195291E4');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2958746832');
        $this->addSql('ALTER TABLE lineorder DROP FOREIGN KEY FK_2341105AC12C7510');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE conversation');
        $this->addSql('DROP TABLE eventadmin');
        $this->addSql('DROP TABLE eventuser');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE groups');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE lineorder');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE tempmail');
        $this->addSql('DROP TABLE utilisateur');
    }
}
