<?php

namespace App\Entity;

use App\Repository\StatutRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatutRepository::class)]
class Statut
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;
    

    #[ORM\Column(length: 255)]
    private ?string $denomination = null;

    #[ORM\OneToMany(mappedBy: 'statut', targetEntity: Fiche::class)]
    private Collection $fiches;

    public function __construct()
    {
        $this->fiches = new ArrayCollection();
    }


    public function getIdStatut(): ?string
    {
        return $this->id;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): static
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * @return Collection<int, Fiche>
     */
    public function getFiche(): Collection
    {
        return $this->fiches;
    }

    public function addFiche(Fiche $fiche): static
    {
        if (!$this->fiches->contains($fiche)) {
            $this->fiches->add($fiche);
            $fiche->setStatut($this);
        }

        return $this;
    }

    public function removeFiche(Fiche $fiche): static
    {
        if ($this->fiches->removeElement($fiche)) {
            // set the owning side to null (unless already changed)
            if ($fiche->getStatut() === $this) {
                $fiche->setStatut(null);
            }
        }

        return $this;
    }
    public function __toString()
        {
            return $this->getDenomination();
        }
}
