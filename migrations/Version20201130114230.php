<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201130114230 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image_ingredient (id INT AUTO_INCREMENT NOT NULL, url_image_ingredient_principale VARCHAR(255) DEFAULT NULL, url_image_ingredient_secondaire VARCHAR(255) DEFAULT NULL, url_image_ingredient_3_d VARCHAR(255) DEFAULT NULL, photos_produit_fichier VARCHAR(255) DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, quantite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(255) NOT NULL, reference_produit VARCHAR(255) NOT NULL, prix_produit VARCHAR(255) NOT NULL, prix_produit_barre VARCHAR(255) DEFAULT NULL, offre_moment VARCHAR(10) NOT NULL, composition_produit VARCHAR(255) DEFAULT NULL, categories_produit VARCHAR(255) NOT NULL, ajout_tableau_config_produit TINYINT(1) NOT NULL, nom_tableau VARCHAR(255) DEFAULT NULL, nbr_categories_tableau INT NOT NULL, categorie_1 VARCHAR(255) NOT NULL, nbr_element_categorie_1 INT NOT NULL, selection_elements_categorie_1 VARCHAR(20) NOT NULL, force_utilisateur TINYINT(1) NOT NULL, categorie_2 VARCHAR(255) NOT NULL, nbr_element_categorie_2 INT NOT NULL, selection_elements_categorie_2 VARCHAR(255) NOT NULL, force_utilisateur_cat_2 TINYINT(1) NOT NULL, ajout_tableau_config_produit_2 TINYINT(1) NOT NULL, url_image_produit VARCHAR(255) NOT NULL, url_image_produit_social VARCHAR(255) NOT NULL, url_image_produit_3_d VARCHAR(255) DEFAULT NULL, url_image_produit_detail VARCHAR(255) DEFAULT NULL, nbr_ingredient_produit INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE image_ingredient');
        $this->addSql('DROP TABLE produit');
    }
}
