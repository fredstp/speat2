<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130140038 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaires ADD restaurant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE horaires ADD CONSTRAINT FK_39B7118FB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_39B7118FB1E7706E ON horaires (restaurant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaires DROP FOREIGN KEY FK_39B7118FB1E7706E');
        $this->addSql('DROP INDEX IDX_39B7118FB1E7706E ON horaires');
        $this->addSql('ALTER TABLE horaires DROP restaurant_id');
    }
}
