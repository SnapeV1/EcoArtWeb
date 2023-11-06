<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106180739 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groups (gid INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, size INT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(gid)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), INDEX IDX_75EA56E0FB7336F0 (queue_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversation MODIFY idconv INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON conversation');
        $this->addSql('ALTER TABLE conversation CHANGE idconv idconv INT NOT NULL');
        $this->addSql('ALTER TABLE conversation ADD PRIMARY KEY (idconv, Date_MSG, idUser2, idUser1)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE groups');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP INDEX `PRIMARY` ON conversation');
        $this->addSql('ALTER TABLE conversation CHANGE idconv idconv INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE conversation ADD PRIMARY KEY (idconv, idUser1, idUser2, Date_MSG)');
    }
}
