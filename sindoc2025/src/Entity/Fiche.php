<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\AccessType;
use App\Repository\FicheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FicheRepository::class)]
class Fiche
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $refer = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $refer_bis = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $denomination = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $texte = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $traduction = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $edition = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $num_fiche = null;

    #[ORM\Column(nullable: true)]
    private ?bool $visible = null;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Statut $statut = null;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livre $livre = null;

    #[ORM\ManyToOne(inversedBy: 'fiches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'fiche', targetEntity: Historique::class)]
    private Collection $historiques;

    #[ORM\OneToMany(targetEntity: FicheMotCle::class, mappedBy: 'fiche', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $ficheMotCles;
    public function __construct()
    {
        $this->ficheMotCles = new ArrayCollection();
        $this->historiques = new ArrayCollection();
        // $this->motCles = new ArrayCollection();
        $this->visible = true;

    }

    public function getIdFiche(): ?int
    {
        return $this->id;
    }

    public function setIdNull(): static
    {
        $this->id = null;
        $this->num_fiche = null;

        return $this;
    }
    public function getMotCles(): array
    {
        return $this->ficheMotCles->map(fn(FicheMotCle $ficheMotCle) => $ficheMotCle->getMotCle())->toArray();
    }

    public function setMotClesNull(): static
    {
        $this->ficheMotCles = new ArrayCollection();
        return $this;
    }
    public function getRefer(): ?string
    {
        return $this->refer;
    }

    public function setRefer(string $refer): static
    {
        $this->refer = $refer;

        return $this;
    }

    public function getReferBis(): ?string
    {
        return $this->refer_bis;
    }

    public function setReferBis(string $refer_bis): static
    {
        $this->refer_bis = $refer_bis;

        return $this;
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

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): static
    {
        $this->texte = $texte;

        return $this;
    }

    public function getTraduction(): ?string
    {
        return $this->traduction;
    }

    public function setTraduction(?string $traduction): static
    {
        $this->traduction = $traduction;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    public function getEdition(): ?string
    {
        return $this->edition;
    }

    public function setEdition(string $edition): static
    {
        $this->edition = $edition;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getNumFiche(): ?string
    {
        return $this->num_fiche;
    }

    public function setNumFiche(string $num_fiche): static
    {
        $this->num_fiche = $num_fiche;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;

        return $this;
    }

    public function getStatut(): ?Statut
    {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(?Livre $livre): static
    {
        $this->livre = $livre;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Historique>
     */
    public function getHistoriques(): Collection
    {
        return $this->historiques;
    }

    public function addHistorique(Historique $historique): static
    {
        if (!$this->historiques->contains($historique)) {
            $this->historiques->add($historique);
            $historique->setFicheID($this->getIdFiche());
            $historique->setData($this);
        }

        return $this;
    }

    // /**
// * @return Collection<int, MotCle>
// */
// public function getMotCles(): Collection
// {
//     // Extract MotCle entities from FicheMotCle relationships
//     return $this->ficheMotCles->map(
//         fn(FicheMotCle $ficheMotCle) => $ficheMotCle->getMotCle()
//     );
// }

    public function addMotCle(MotCle $motCle): static
    {
        // Check if the relationship already exists
        foreach ($this->ficheMotCles as $ficheMotCle) {
            if ($ficheMotCle->getMotCle() === $motCle) {
                return $this; // Avoid duplication
            }
        }

        // Create a new FicheMotCle relationship
        $ficheMotCle = new FicheMotCle();
        $ficheMotCle->setFiche($this);
        $ficheMotCle->setMotCle($motCle);

        // Add to collection
        $this->ficheMotCles->add($ficheMotCle);

        return $this;
    }
    public function removeMotCle(MotCle $motCle): static
    {
        foreach ($this->ficheMotCles as $ficheMotCle) {
            if ($ficheMotCle->getMotCle() === $motCle) {
                $this->ficheMotCles->removeElement($ficheMotCle);
                return $this;
            }
        }

        return $this;
    }

    // // return $this;
// // }

    // // public function removeMotCle(MotCle $motCle): static
// // {
// // $this->motCles->removeElement($motCle);
// // $motCle->removeFicheMotCle($this);

    // // return $this;
// // }

    // /**
// * @return Collection<int, FicheMotCle>
// */
// public function getFicheMotCles(): Collection
// {
// return $this->ficheMotCles;
// }

    // public function removeFicheMotCle(FicheMotCle $ficheMotCle): static
// {
//     $this->ficheMotCles->removeElement($ficheMotCle);
//     $ficheMotCle->setFiche(null);

    //     return $this;
// }

    // public function addFicheMotCle(FicheMotCle $ficheMotCle): static
// {
//     if (!$this->ficheMotCles->contains($ficheMotCle)) {
//         $this->ficheMotCles->add($ficheMotCle);
//         $ficheMotCle->setFiche($this);

    //         // Check if the related motCle is already in the motCles collection
//         $motCle = $ficheMotCle->getMotCle();
//         if (!$this->ficheMotCles->contains($motCle)) {
//             // If the motCle is not already in the motCles collection, add it
//             $this->ficheMotCles->add($motCle);
//         }
//     }

    //     return $this;
// }
// public function getMotCles(): Collection
//     {
//         return $this->motCles;
//     }
    public function getFicheMotCles(): Collection
    {
        return $this->ficheMotCles;
    }

    public function addFicheMotCle(FicheMotCle $ficheMotCle): self
    {
        if (!$this->ficheMotCles->contains($ficheMotCle)) {
            $this->ficheMotCles->add($ficheMotCle);
            $ficheMotCle->setFiche($this); // Set owning side
        }

        return $this;
    }

    public function removeFicheMotCle(FicheMotCle $ficheMotCle): self
    {
        if ($this->ficheMotCles->removeElement($ficheMotCle)) {
            if ($ficheMotCle->getFiche() === $this) {
                $ficheMotCle->setFiche(null);
            }
        }

        return $this;
    }




}