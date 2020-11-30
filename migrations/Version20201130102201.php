<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130102201 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, code_etablissement VARCHAR(20) NOT NULL, nom_du_restaurant VARCHAR(100) NOT NULL, denomination_commerciale VARCHAR(100) NOT NULL, siret VARCHAR(20) DEFAULT NULL, restaurant_adress VARCHAR(255) NOT NULL, code_postal VARCHAR(20) NOT NULL, ville VARCHAR(100) NOT NULL, departement VARCHAR(4) NOT NULL, gps VARCHAR(255) NOT NULL, telephone VARCHAR(16) NOT NULL, email VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, restaurant_type VARCHAR(100) NOT NULL, service_proposes VARCHAR(100) NOT NULL, horaires VARCHAR(255) NOT NULL, categories_restaurant VARCHAR(255) NOT NULL, nbr_categories_produit_restaurant INT NOT NULL, url_logo_restaurant VARCHAR(255) NOT NULL, url_logo_menu VARCHAR(255) NOT NULL, url_logo_compo_produit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE restaurant');
    }
}
