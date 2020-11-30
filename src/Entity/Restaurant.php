<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code_etablissement;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom_du_restaurant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $denomination_commerciale;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $restaurant_adress;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $GPS;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $site_web;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $restaurant_type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $service_proposes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categories_restaurant;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_categories_produit_restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_logo_restaurant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_logo_menu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_logo_compo_produit;

    /**
     * @ORM\ManyToMany(targetEntity=JoursOuverture::class, inversedBy="restaurants")
     */
    private $JoursOuverture;

    /**
     * @ORM\OneToMany(targetEntity=Horaires::class, mappedBy="Restaurant")
     */
    private $horaires;

    public function __construct()
    {
        $this->JoursOuverture = new ArrayCollection();
        $this->horaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeEtablissement(): ?string
    {
        return $this->code_etablissement;
    }

    public function setCodeEtablissement(string $code_etablissement): self
    {
        $this->code_etablissement = $code_etablissement;

        return $this;
    }

    public function getNomDuRestaurant(): ?string
    {
        return $this->nom_du_restaurant;
    }

    public function setNomDuRestaurant(string $nom_du_restaurant): self
    {
        $this->nom_du_restaurant = $nom_du_restaurant;

        return $this;
    }

    public function getDenominationCommerciale(): ?string
    {
        return $this->denomination_commerciale;
    }

    public function setDenominationCommerciale(string $denomination_commerciale): self
    {
        $this->denomination_commerciale = $denomination_commerciale;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getRestaurantAdress(): ?string
    {
        return $this->restaurant_adress;
    }

    public function setRestaurantAdress(string $restaurant_adress): self
    {
        $this->restaurant_adress = $restaurant_adress;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getGPS(): ?string
    {
        return $this->GPS;
    }

    public function setGPS(string $GPS): self
    {
        $this->GPS = $GPS;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->site_web;
    }

    public function setSiteWeb(?string $site_web): self
    {
        $this->site_web = $site_web;

        return $this;
    }

    public function getRestaurantType(): ?string
    {
        return $this->restaurant_type;
    }

    public function setRestaurantType(string $restaurant_type): self
    {
        $this->restaurant_type = $restaurant_type;

        return $this;
    }

    public function getServiceProposes(): ?string
    {
        return $this->service_proposes;
    }

    public function setServiceProposes(string $service_proposes): self
    {
        $this->service_proposes = $service_proposes;

        return $this;
    }

    public function getCategoriesRestaurant(): ?string
    {
        return $this->categories_restaurant;
    }

    public function setCategoriesRestaurant(string $categories_restaurant): self
    {
        $this->categories_restaurant = $categories_restaurant;

        return $this;
    }

    public function getNbrCategoriesProduitRestaurant(): ?int
    {
        return $this->nbr_categories_produit_restaurant;
    }

    public function setNbrCategoriesProduitRestaurant(int $nbr_categories_produit_restaurant): self
    {
        $this->nbr_categories_produit_restaurant = $nbr_categories_produit_restaurant;

        return $this;
    }

    public function getUrlLogoRestaurant(): ?string
    {
        return $this->url_logo_restaurant;
    }

    public function setUrlLogoRestaurant(string $url_logo_restaurant): self
    {
        $this->url_logo_restaurant = $url_logo_restaurant;

        return $this;
    }

    public function getUrlLogoMenu(): ?string
    {
        return $this->url_logo_menu;
    }

    public function setUrlLogoMenu(string $url_logo_menu): self
    {
        $this->url_logo_menu = $url_logo_menu;

        return $this;
    }

    public function getUrlLogoCompoProduit(): ?string
    {
        return $this->url_logo_compo_produit;
    }

    public function setUrlLogoCompoProduit(?string $url_logo_compo_produit): self
    {
        $this->url_logo_compo_produit = $url_logo_compo_produit;

        return $this;
    }

    /**
     * @return Collection|JoursOuverture[]
     */
    public function getJoursOuverture(): Collection
    {
        return $this->JoursOuverture;
    }

    public function addJoursOuverture(JoursOuverture $joursOuverture): self
    {
        if (!$this->JoursOuverture->contains($joursOuverture)) {
            $this->JoursOuverture[] = $joursOuverture;
        }

        return $this;
    }

    public function removeJoursOuverture(JoursOuverture $joursOuverture): self
    {
        $this->JoursOuverture->removeElement($joursOuverture);

        return $this;
    }

    /**
     * @return Collection|Horaires[]
     */
    public function getHoraires(): Collection
    {
        return $this->horaires;
    }

    public function addHoraire(Horaires $horaire): self
    {
        if (!$this->horaires->contains($horaire)) {
            $this->horaires[] = $horaire;
            $horaire->setRestaurant($this);
        }

        return $this;
    }

    public function removeHoraire(Horaires $horaire): self
    {
        if ($this->horaires->removeElement($horaire)) {
            // set the owning side to null (unless already changed)
            if ($horaire->getRestaurant() === $this) {
                $horaire->setRestaurant(null);
            }
        }

        return $this;
    }
}
