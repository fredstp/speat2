<?php

namespace App\Entity;

use App\Repository\ImageIngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageIngredientRepository::class)
 */
class ImageIngredient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image_ingredient_principale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image_ingredient_secondaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image_ingredient_3D;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photos_produit_fichier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quantite;

    /**
     * @ORM\ManyToMany(targetEntity=Produit::class, mappedBy="ImageIngredient")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlImageIngredientPrincipale(): ?string
    {
        return $this->url_image_ingredient_principale;
    }

    public function setUrlImageIngredientPrincipale(?string $url_image_ingredient_principale): self
    {
        $this->url_image_ingredient_principale = $url_image_ingredient_principale;

        return $this;
    }

    public function getUrlImageIngredientSecondaire(): ?string
    {
        return $this->url_image_ingredient_secondaire;
    }

    public function setUrlImageIngredientSecondaire(?string $url_image_ingredient_secondaire): self
    {
        $this->url_image_ingredient_secondaire = $url_image_ingredient_secondaire;

        return $this;
    }

    public function getUrlImageIngredient3D(): ?string
    {
        return $this->url_image_ingredient_3D;
    }

    public function setUrlImageIngredient3D(?string $url_image_ingredient_3D): self
    {
        $this->url_image_ingredient_3D = $url_image_ingredient_3D;

        return $this;
    }

    public function getPhotosProduitFichier(): ?string
    {
        return $this->photos_produit_fichier;
    }

    public function setPhotosProduitFichier(?string $photos_produit_fichier): self
    {
        $this->photos_produit_fichier = $photos_produit_fichier;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(?string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->addImageIngredient($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            $produit->removeImageIngredient($this);
        }

        return $this;
    }
}
