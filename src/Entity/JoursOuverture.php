<?php

namespace App\Entity;

use App\Repository\JoursOuvertureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JoursOuvertureRepository::class)
 */
class JoursOuverture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $jour;

    /**
     * @ORM\ManyToMany(targetEntity=Restaurant::class, mappedBy="JoursOuverture")
     */
    private $restaurants;

    /**
     * @ORM\OneToMany(targetEntity=Horaires::class, mappedBy="JoursOuverture")
     */
    private $horaires;

    public function __construct()
    {
        $this->restaurants = new ArrayCollection();
        $this->horaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(?string $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * @return Collection|Restaurant[]
     */
    public function getRestaurants(): Collection
    {
        return $this->restaurants;
    }

    public function addRestaurant(Restaurant $restaurant): self
    {
        if (!$this->restaurants->contains($restaurant)) {
            $this->restaurants[] = $restaurant;
            $restaurant->addJoursOuverture($this);
        }

        return $this;
    }

    public function removeRestaurant(Restaurant $restaurant): self
    {
        if ($this->restaurants->removeElement($restaurant)) {
            $restaurant->removeJoursOuverture($this);
        }

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
            $horaire->setJoursOuverture($this);
        }

        return $this;
    }

    public function removeHoraire(Horaires $horaire): self
    {
        if ($this->horaires->removeElement($horaire)) {
            // set the owning side to null (unless already changed)
            if ($horaire->getJoursOuverture() === $this) {
                $horaire->setJoursOuverture(null);
            }
        }

        return $this;
    }
}
