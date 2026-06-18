<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{


    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: Fiche::class)]
    private Collection $fiches;

    #[ORM\ManyToOne(inversedBy: 'livres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Index $index = null;

    #[ORM\Column(type: 'boolean')]
    private bool $visible = true;
    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: LivreAuth::class, cascade: ['persist', 'remove'])]
    private Collection $livreAuths;
    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;
        return $this;
    }

    #[ORM\Column]
    private array $idLivre = [];
    public function __construct()
    {
        $this->fiches = new ArrayCollection();
        $this->livreAuths = new ArrayCollection();
    }

    public function getLivreAuths(): Collection
    {
        return $this->livreAuths;
    }
    public function getIdLivre(): ?int
    {
        return $this->id;
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
            $fiche->setLivre($this);
        }

        return $this;
    }

    public function removeFiche(Fiche $fiche): static
    {
        if ($this->fiches->removeElement($fiche)) {
            // set the owning side to null (unless already changed)
            if ($fiche->getLivre() === $this) {
                $fiche->setLivre(null);
            }
        }

        return $this;
    }

    public function getIndex(): ?Index
    {
        return $this->index;
    }

    public function setIndex(?Index $index): static
    {
        $this->index = $index;

        return $this;
    }
    public function __toString()
    {
        return $this->getNom();
    }
    public function getIdLivreAuto(): array
    {
        $idLivre = $this->idLivre;
        // guarantee every user at least has ROLE_USER
        $idLivre[] = '';

        return array_unique($idLivre);
    }

    public function setIdLivreAuto(array $idLivre): static
    {
        $this->idLivre = $idLivre;

        return $this;
    }


}
