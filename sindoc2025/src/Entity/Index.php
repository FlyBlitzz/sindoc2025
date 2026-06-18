<?php

namespace App\Entity;

use App\Repository\IndexRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndexRepository::class)]
class Index
{

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'index', targetEntity: Livre::class, fetch: "EAGER")]
    private Collection $livres;

    #[ORM\OneToMany(mappedBy: 'index', targetEntity: MotCle::class, cascade: ['remove'], fetch: "EAGER", orphanRemoval: true)]
    private Collection $motCles;

    #[ORM\OneToMany(mappedBy: 'index', targetEntity: IndexAuth::class, cascade: ['remove'], fetch: "EAGER", orphanRemoval: true)]
    private Collection $index_auth;

    #[ORM\Column(type: 'boolean')]
    private bool $visible = true;

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;
        return $this;
    }

    public function __construct()
    {
        $this->livres = new ArrayCollection();
        $this->motCles = new ArrayCollection();

    }


    public function getIdIndex(): ?string
    {
        return $this->id;
    }

    public function setIdIndexNull(): static
    {
        $this->id = null;

        return $this;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, MotCle>
     */
    public function getMotCles(): Collection
    {
        return $this->motCles;
    }

    public function addMotCle(MotCle $motCle): static
    {
        if (!$this->motCles->contains($motCle)) {
            $this->motCles->add($motCle);
            $motCle->setIndex($this);
        }

        return $this;
    }

    public function removeMotCle(MotCle $motCle): static
    {
        if ($this->motCles->removeElement($motCle)) {
            // set the owning side to null (unless already changed)
            if ($motCle->getIndex() === $this) {
                $motCle->setIndex(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, Livre>
     */
    public function getLivres(): Collection
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): static
    {
        if (!$this->livres->contains($livre)) {
            $this->livres->add($livre);
            $livre->setIndex($this);
        }

        return $this;
    }

    public function removeLivre(Livre $livre): static
    {
        if ($this->livres->removeElement($livre)) {
            // set the owning side to null (unless already changed)
            if ($livre->getIndex() === $this) {
                $livre->setIndex(null);
            }
        }

        return $this;
    }
}
