<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201201113648 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE horaires (id INT AUTO_INCREMENT NOT NULL, restaurant_id INT DEFAULT NULL, jours_ouverture_id INT DEFAULT NULL, start_time TIME DEFAULT NULL, end_time TIME DEFAULT NULL, INDEX IDX_39B7118FB1E7706E (restaurant_id), INDEX IDX_39B7118F1764BD46 (jours_ouverture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_ingredient (id INT AUTO_INCREMENT NOT NULL, url_image_ingredient_principale VARCHAR(255) DEFAULT NULL, url_image_ingredient_secondaire VARCHAR(255) DEFAULT NULL, url_image_ingredient_3_d VARCHAR(255) DEFAULT NULL, photos_produit_fichier VARCHAR(255) DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, quantite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jours_ouverture (id INT AUTO_INCREMENT NOT NULL, jour VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(255) NOT NULL, reference_produit VARCHAR(255) NOT NULL, prix_produit VARCHAR(255) NOT NULL, prix_produit_barre VARCHAR(255) DEFAULT NULL, offre_moment VARCHAR(10) NOT NULL, composition_produit VARCHAR(255) DEFAULT NULL, categories_produit VARCHAR(255) NOT NULL, ajout_tableau_config_produit TINYINT(1) NOT NULL, nom_tableau VARCHAR(255) DEFAULT NULL, nbr_categories_tableau INT NOT NULL, categorie_1 VARCHAR(255) NOT NULL, nbr_element_categorie_1 INT NOT NULL, selection_elements_categorie_1 VARCHAR(20) NOT NULL, force_utilisateur TINYINT(1) NOT NULL, categorie_2 VARCHAR(255) NOT NULL, nbr_element_categorie_2 INT NOT NULL, selection_elements_categorie_2 VARCHAR(255) NOT NULL, force_utilisateur_cat_2 TINYINT(1) NOT NULL, ajout_tableau_config_produit_2 TINYINT(1) NOT NULL, url_image_produit VARCHAR(255) NOT NULL, url_image_produit_social VARCHAR(255) NOT NULL, url_image_produit_3_d VARCHAR(255) DEFAULT NULL, url_image_produit_detail VARCHAR(255) DEFAULT NULL, nbr_ingredient_produit INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_image_ingredient (produit_id INT NOT NULL, image_ingredient_id INT NOT NULL, INDEX IDX_F4E810CEF347EFB (produit_id), INDEX IDX_F4E810CED7310287 (image_ingredient_id), PRIMARY KEY(produit_id, image_ingredient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, code_etablissement VARCHAR(20) NOT NULL, nom_du_restaurant VARCHAR(100) NOT NULL, denomination_commerciale VARCHAR(100) NOT NULL, siret VARCHAR(20) DEFAULT NULL, restaurant_adress VARCHAR(255) NOT NULL, code_postal VARCHAR(20) NOT NULL, ville VARCHAR(100) NOT NULL, departement VARCHAR(4) NOT NULL, gps VARCHAR(255) NOT NULL, telephone VARCHAR(16) NOT NULL, email VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, restaurant_type VARCHAR(100) NOT NULL, service_proposes VARCHAR(100) NOT NULL, categories_restaurant VARCHAR(255) NOT NULL, nbr_categories_produit_restaurant INT NOT NULL, url_logo_restaurant VARCHAR(255) NOT NULL, url_logo_menu VARCHAR(255) NOT NULL, url_logo_compo_produit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant_jours_ouverture (restaurant_id INT NOT NULL, jours_ouverture_id INT NOT NULL, INDEX IDX_B6E25E1B1E7706E (restaurant_id), INDEX IDX_B6E25E11764BD46 (jours_ouverture_id), PRIMARY KEY(restaurant_id, jours_ouverture_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE horaires ADD CONSTRAINT FK_39B7118FB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('ALTER TABLE horaires ADD CONSTRAINT FK_39B7118F1764BD46 FOREIGN KEY (jours_ouverture_id) REFERENCES jours_ouverture (id)');
        $this->addSql('ALTER TABLE produit_image_ingredient ADD CONSTRAINT FK_F4E810CEF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_image_ingredient ADD CONSTRAINT FK_F4E810CED7310287 FOREIGN KEY (image_ingredient_id) REFERENCES image_ingredient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture ADD CONSTRAINT FK_B6E25E1B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture ADD CONSTRAINT FK_B6E25E11764BD46 FOREIGN KEY (jours_ouverture_id) REFERENCES jours_ouverture (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit_image_ingredient DROP FOREIGN KEY FK_F4E810CED7310287');
        $this->addSql('ALTER TABLE horaires DROP FOREIGN KEY FK_39B7118F1764BD46');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture DROP FOREIGN KEY FK_B6E25E11764BD46');
        $this->addSql('ALTER TABLE produit_image_ingredient DROP FOREIGN KEY FK_F4E810CEF347EFB');
        $this->addSql('ALTER TABLE horaires DROP FOREIGN KEY FK_39B7118FB1E7706E');
        $this->addSql('ALTER TABLE restaurant_jours_ouverture DROP FOREIGN KEY FK_B6E25E1B1E7706E');
        $this->addSql('DROP TABLE horaires');
        $this->addSql('DROP TABLE image_ingredient');
        $this->addSql('DROP TABLE jours_ouverture');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produit_image_ingredient');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE restaurant_jours_ouverture');
    }
}
