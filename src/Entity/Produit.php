<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix_produit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prix_produit_barre;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $offre_moment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $composition_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categories_produit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ajout_tableau_config_produit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_tableau;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_categories_tableau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie_1;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_element_categorie_1;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $selection_elements_categorie_1;

    /**
     * @ORM\Column(type="boolean")
     */
    private $force_utilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie_2;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_element_categorie_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $selection_elements_categorie_2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $force_utilisateur_cat_2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ajout_tableau_config_produit_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_image_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_image_produit_social;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image_produit_3D;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image_produit_detail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbr_ingredient_produit;

    /**
     * @ORM\ManyToMany(targetEntity=ImageIngredient::class, inversedBy="produits")
     */
    private $ImageIngredient;

    public function __construct()
    {
        $this->ImageIngredient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit): self
    {
        $this->nom_produit = $nom_produit;

        return $this;
    }

    public function getReferenceProduit(): ?string
    {
        return $this->reference_produit;
    }

    public function setReferenceProduit(string $reference_produit): self
    {
        $this->reference_produit = $reference_produit;

        return $this;
    }

    public function getPrixProduit(): ?string
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(string $prix_produit): self
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    public function getPrixProduitBarre(): ?string
    {
        return $this->prix_produit_barre;
    }

    public function setPrixProduitBarre(?string $prix_produit_barre): self
    {
        $this->prix_produit_barre = $prix_produit_barre;

        return $this;
    }

    public function getOffreMoment(): ?string
    {
        return $this->offre_moment;
    }

    public function setOffreMoment(string $offre_moment): self
    {
        $this->offre_moment = $offre_moment;

        return $this;
    }

    public function getCompositionProduit(): ?string
    {
        return $this->composition_produit;
    }

    public function setCompositionProduit(?string $composition_produit): self
    {
        $this->composition_produit = $composition_produit;

        return $this;
    }

    public function getCategoriesProduit(): ?string
    {
        return $this->categories_produit;
    }

    public function setCategoriesProduit(string $categories_produit): self
    {
        $this->categories_produit = $categories_produit;

        return $this;
    }

    public function getAjoutTableauConfigProduit(): ?bool
    {
        return $this->ajout_tableau_config_produit;
    }

    public function setAjoutTableauConfigProduit(bool $ajout_tableau_config_produit): self
    {
        $this->ajout_tableau_config_produit = $ajout_tableau_config_produit;

        return $this;
    }

    public function getNomTableau(): ?string
    {
        return $this->nom_tableau;
    }

    public function setNomTableau(?string $nom_tableau): self
    {
        $this->nom_tableau = $nom_tableau;

        return $this;
    }

    public function getNbrCategoriesTableau(): ?int
    {
        return $this->nbr_categories_tableau;
    }

    public function setNbrCategoriesTableau(int $nbr_categories_tableau): self
    {
        $this->nbr_categories_tableau = $nbr_categories_tableau;

        return $this;
    }

    public function getCategorie1(): ?string
    {
        return $this->categorie_1;
    }

    public function setCategorie1(string $categorie_1): self
    {
        $this->categorie_1 = $categorie_1;

        return $this;
    }

    public function getNbrElementCategorie1(): ?int
    {
        return $this->nbr_element_categorie_1;
    }

    public function setNbrElementCategorie1(int $nbr_element_categorie_1): self
    {
        $this->nbr_element_categorie_1 = $nbr_element_categorie_1;

        return $this;
    }

    public function getSelectionElementsCategorie1(): ?string
    {
        return $this->selection_elements_categorie_1;
    }

    public function setSelectionElementsCategorie1(string $selection_elements_categorie_1): self
    {
        $this->selection_elements_categorie_1 = $selection_elements_categorie_1;

        return $this;
    }

    public function getForceUtilisateur(): ?bool
    {
        return $this->force_utilisateur;
    }

    public function setForceUtilisateur(bool $force_utilisateur): self
    {
        $this->force_utilisateur = $force_utilisateur;

        return $this;
    }

    public function getCategorie2(): ?string
    {
        return $this->categorie_2;
    }

    public function setCategorie2(string $categorie_2): self
    {
        $this->categorie_2 = $categorie_2;

        return $this;
    }

    public function getNbrElementCategorie2(): ?int
    {
        return $this->nbr_element_categorie_2;
    }

    public function setNbrElementCategorie2(int $nbr_element_categorie_2): self
    {
        $this->nbr_element_categorie_2 = $nbr_element_categorie_2;

        return $this;
    }

    public function getSelectionElementsCategorie2(): ?string
    {
        return $this->selection_elements_categorie_2;
    }

    public function setSelectionElementsCategorie2(string $selection_elements_categorie_2): self
    {
        $this->selection_elements_categorie_2 = $selection_elements_categorie_2;

        return $this;
    }

    public function getForceUtilisateurCat2(): ?bool
    {
        return $this->force_utilisateur_cat_2;
    }

    public function setForceUtilisateurCat2(bool $force_utilisateur_cat_2): self
    {
        $this->force_utilisateur_cat_2 = $force_utilisateur_cat_2;

        return $this;
    }

    public function getAjoutTableauConfigProduit2(): ?bool
    {
        return $this->ajout_tableau_config_produit_2;
    }

    public function setAjoutTableauConfigProduit2(bool $ajout_tableau_config_produit_2): self
    {
        $this->ajout_tableau_config_produit_2 = $ajout_tableau_config_produit_2;

        return $this;
    }

    public function getUrlImageProduit(): ?string
    {
        return $this->url_image_produit;
    }

    public function setUrlImageProduit(string $url_image_produit): self
    {
        $this->url_image_produit = $url_image_produit;

        return $this;
    }

    public function getUrlImageProduitSocial(): ?string
    {
        return $this->url_image_produit_social;
    }

    public function setUrlImageProduitSocial(string $url_image_produit_social): self
    {
        $this->url_image_produit_social = $url_image_produit_social;

        return $this;
    }

    public function getUrlImageProduit3D(): ?string
    {
        return $this->url_image_produit_3D;
    }

    public function setUrlImageProduit3D(?string $url_image_produit_3D): self
    {
        $this->url_image_produit_3D = $url_image_produit_3D;

        return $this;
    }

    public function getUrlImageProduitDetail(): ?string
    {
        return $this->url_image_produit_detail;
    }

    public function setUrlImageProduitDetail(?string $url_image_produit_detail): self
    {
        $this->url_image_produit_detail = $url_image_produit_detail;

        return $this;
    }

    public function getNbrIngredientProduit(): ?int
    {
        return $this->nbr_ingredient_produit;
    }

    public function setNbrIngredientProduit(?int $nbr_ingredient_produit): self
    {
        $this->nbr_ingredient_produit = $nbr_ingredient_produit;

        return $this;
    }

    /**
     * @return Collection|ImageIngredient[]
     */
    public function getImageIngredient(): Collection
    {
        return $this->ImageIngredient;
    }

    public function addImageIngredient(ImageIngredient $imageIngredient): self
    {
        if (!$this->ImageIngredient->contains($imageIngredient)) {
            $this->ImageIngredient[] = $imageIngredient;
        }

        return $this;
    }

    public function removeImageIngredient(ImageIngredient $imageIngredient): self
    {
        $this->ImageIngredient->removeElement($imageIngredient);

        return $this;
    }
}
