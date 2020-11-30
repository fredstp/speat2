<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130141016 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit_image_ingredient (produit_id INT NOT NULL, image_ingredient_id INT NOT NULL, INDEX IDX_F4E810CEF347EFB (produit_id), INDEX IDX_F4E810CED7310287 (image_ingredient_id), PRIMARY KEY(produit_id, image_ingredient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit_image_ingredient ADD CONSTRAINT FK_F4E810CEF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_image_ingredient ADD CONSTRAINT FK_F4E810CED7310287 FOREIGN KEY (image_ingredient_id) REFERENCES image_ingredient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE produit_image_ingredient');
    }
}
