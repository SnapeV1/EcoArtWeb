<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106182644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groups (Gid INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, size INT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(Gid)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, Role VARCHAR(50) NOT NULL, GroupID INT DEFAULT NULL, UserID INT DEFAULT NULL, INDEX IDX_F6B4FB29195291E4 (GroupID), INDEX IDX_F6B4FB2958746832 (UserID), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), INDEX IDX_75EA56E0FB7336F0 (queue_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29195291E4 FOREIGN KEY (GroupID) REFERENCES groups (gid)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2958746832 FOREIGN KEY (UserID) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29195291E4');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2958746832');
        $this->addSql('DROP TABLE groups');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
