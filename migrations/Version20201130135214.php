<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130135214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE restaurant_jours_ouverture (restaurant_id INT NOT NULL, jours_ouverture_id INT NOT NULL, INDEX IDX_B6E25E1B1E7706E (restaurant_id), INDEX IDX_B6E25E11764BD46 (jours_ouverture_id), PRIMARY KEY(restaurant_id, jours_ouverture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture ADD CONSTRAINT FK_B6E25E1B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture ADD CONSTRAINT FK_B6E25E11764BD46 FOREIGN KEY (jours_ouverture_id) REFERENCES jours_ouverture (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE restaurant_jours_ouverture');
    }
}
