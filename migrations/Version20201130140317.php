<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130140317 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaires ADD jours_ouverture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE horaires ADD CONSTRAINT FK_39B7118F1764BD46 FOREIGN KEY (jours_ouverture_id) REFERENCES jours_ouverture (id)');
        $this->addSql('CREATE INDEX IDX_39B7118F1764BD46 ON horaires (jours_ouverture_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaires DROP FOREIGN KEY FK_39B7118F1764BD46');
        $this->addSql('DROP INDEX IDX_39B7118F1764BD46 ON horaires');
        $this->addSql('ALTER TABLE horaires DROP jours_ouverture_id');
    }
}
