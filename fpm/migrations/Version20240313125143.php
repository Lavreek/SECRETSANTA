<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313125143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shuffle ADD game_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE shuffle ADD CONSTRAINT FK_33FE5971E48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE shuffle ADD CONSTRAINT FK_33FE5971A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_33FE5971E48FD905 ON shuffle (game_id)');
        $this->addSql('CREATE INDEX IDX_33FE5971A76ED395 ON shuffle (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shuffle DROP FOREIGN KEY FK_33FE5971E48FD905');
        $this->addSql('ALTER TABLE shuffle DROP FOREIGN KEY FK_33FE5971A76ED395');
        $this->addSql('DROP INDEX IDX_33FE5971E48FD905 ON shuffle');
        $this->addSql('DROP INDEX IDX_33FE5971A76ED395 ON shuffle');
        $this->addSql('ALTER TABLE shuffle DROP game_id, DROP user_id');
    }
}
