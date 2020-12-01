<?php

namespace App\Entity;

use App\Entity\Restaurant;
use App\Entity\JoursOuverture;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

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
    private $codeEtablissement;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomDuRestaurant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $denominationCommerciale;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $restaurantAdress;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $codePostal;

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
    private $siteWeb;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $restaurantType;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $serviceProposes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categoriesRestaurant;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrCategoriesProduitRestaurant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlLogoRestaurant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urlLogoMenu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlLogoCompoProduit;

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
        return $this->codeEtablissement;
    }

    public function setCodeEtablissement(string $codeEtablissement): self
    {
        $this->codeEtablissement = $codeEtablissement;

        return $this;
    }

    public function getNomDuRestaurant(): ?string
    {
        return $this->nomDuRestaurant;
    }

    public function setNomDuRestaurant(string $nomDuRestaurant): self
    {
        $this->nomDuRestaurant = $nomDuRestaurant;

        return $this;
    }

    public function getDenominationCommerciale(): ?string
    {
        return $this->denominationCommerciale;
    }

    public function setDenominationCommerciale(string $denominationCommerciale): self
    {
        $this->denominationCommerciale = $denominationCommerciale;

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
        return $this->restaurantAdress;
    }

    public function setRestaurantAdress(string $restaurantAdress): self
    {
        $this->restaurantAdress = $restaurantAdress;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

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
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): self
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    public function getRestaurantType(): ?string
    {
        return $this->restaurantType;
    }

    public function setRestaurantType(string $restaurantType): self
    {
        $this->restaurantType = $restaurantType;

        return $this;
    }

    public function getServiceProposes(): ?string
    {
        return $this->serviceProposes;
    }

    public function setServiceProposes(string $serviceProposes): self
    {
        $this->serviceProposes = $serviceProposes;

        return $this;
    }

    public function getCategoriesRestaurant(): ?string
    {
        return $this->categoriesRestaurant;
    }

    public function setCategoriesRestaurant(string $categoriesRestaurant): self
    {
        $this->categoriesRestaurant = $categoriesRestaurant;

        return $this;
    }

    public function getNbrCategoriesProduitRestaurant(): ?int
    {
        return $this->nbrCategoriesProduitRestaurant;
    }

    public function setNbrCategoriesProduitRestaurant(int $nbrCategoriesProduitRestaurant): self
    {
        $this->nbrCategoriesProduitRestaurant = $nbrCategoriesProduitRestaurant;

        return $this;
    }

    public function getUrlLogoRestaurant(): ?string
    {
        return $this->urlLogoRestaurant;
    }

    public function setUrlLogoRestaurant(string $urlLogoRestaurant): self
    {
        $this->urlLogoRestaurant = $urlLogoRestaurant;

        return $this;
    }

    public function getUrlLogoMenu(): ?string
    {
        return $this->urlLogoMenu;
    }

    public function setUrlLogoMenu(string $urlLogoMenu): self
    {
        $this->urlLogoMenu = $urlLogoMenu;

        return $this;
    }

    public function getUrlLogoCompoProduit(): ?string
    {
        return $this->urlLogoCompoProduit;
    }

    public function setUrlLogoCompoProduit(?string $urlLogoCompoProduit): self
    {
        $this->urlLogoCompoProduit = $urlLogoCompoProduit;

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
