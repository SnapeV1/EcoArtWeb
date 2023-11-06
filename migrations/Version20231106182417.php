<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106182417 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversation MODIFY idconv INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON conversation');
        $this->addSql('ALTER TABLE conversation CHANGE idconv idconv INT NOT NULL');
        $this->addSql('ALTER TABLE conversation ADD PRIMARY KEY (idconv, Date_MSG, idUser2, idUser1)');
        $this->addSql('ALTER TABLE groups MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON groups');
        $this->addSql('ALTER TABLE groups CHANGE id Gid INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE groups ADD PRIMARY KEY (Gid)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29195291E4 FOREIGN KEY (GroupID) REFERENCES groups (gid)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2958746832 FOREIGN KEY (UserID) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `PRIMARY` ON conversation');
        $this->addSql('ALTER TABLE conversation CHANGE idconv idconv INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE conversation ADD PRIMARY KEY (idconv, idUser1, idUser2, Date_MSG)');
        $this->addSql('ALTER TABLE groups MODIFY Gid INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON groups');
        $this->addSql('ALTER TABLE groups CHANGE Gid id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE groups ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29195291E4');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2958746832');
    }
}
