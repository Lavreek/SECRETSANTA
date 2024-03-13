<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313135308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shuffle DROP FOREIGN KEY FK_33FE597175BD1D29');
        $this->addSql('DROP INDEX IDX_33FE597175BD1D29 ON shuffle');
        $this->addSql('ALTER TABLE shuffle ADD giver VARCHAR(255) DEFAULT NULL, DROP giver_id, CHANGE wish wish VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shuffle ADD giver_id INT DEFAULT NULL, DROP giver, CHANGE wish wish VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE shuffle ADD CONSTRAINT FK_33FE597175BD1D29 FOREIGN KEY (giver_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_33FE597175BD1D29 ON shuffle (giver_id)');
    }
}
