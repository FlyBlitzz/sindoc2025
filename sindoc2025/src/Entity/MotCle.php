<?php

namespace App\Entity;

use App\Repository\MotCleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotCleRepository::class)]
class MotCle
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int  $id = null;

    #[ORM\Column(length: 10)]
    private ?string $reference = null;

    #[ORM\Column(length: 500)]
    private ?string $denomination = null;

    #[ORM\ManyToOne(targetEntity: Index::class, inversedBy: 'motCles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Index $index = null;


    //#[ORM\OneToMany(mappedBy: 'index', targetEntity: Index::class)]
    //private Collection $motCles;

    // // #[ORM\OneToMany(targetEntity : FicheMotCle::class, mappedBy : "motCle", cascade : [ "persist", "remove"])]
    // // private $ficheMotCles;
    #[ORM\OneToMany(targetEntity: FicheMotCle::class, mappedBy: 'motCle', cascade: ['persist', 'remove'])]
    private Collection $ficheMotCles;
    
    //#[ORM\ManyToMany(targetEntity:"App\Entity\Fiche", mappedBy:"motCles")]
    //private $fiches;
    public function __construct()
    {
        $this->ficheMotCles = new ArrayCollection();
        $this->fiches = new ArrayCollection();
    }

     public function getFicheMotCles(): Collection
    {
        return $this->ficheMotCles;
    }
    public function getIdMotCle(): ?string
    {
        return $this->id;
    }


    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

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

    public function getIndex(): ?Index
    {
        return $this->index;
    }

    public function setIndex(?Index $index): static
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return Collection<int, Index>
     */
    public function getMotCles(): Collection
    {
        return $this->motCles;
    }
    /**
     * @return Collection|Fiche[]
     */
    public function getFiches(): Collection
    {
        return $this->fiches;
    }
//     public function addMotCle(Index $motCle): static
//     {
//         if (!$this->motCles->contains($motCle)) {
//             $this->motCles->add($motCle);
//             $motCle->setIndex($this);
//         }

//         return $this;
//     }

//     public function removeMotCle(Index $motCle): static
//     {
//         if ($this->motCles->removeElement($motCle)) {
//             if ($motCle->getIndex() === $this) {
//                 $motCle->setIndex(null);
//             }
//         }

//         return $this;
//     }

//    public function __toString()
//        {
//            return $this->getDenomination();
//        }

//        public function addFicheMotCle(FicheMotCle $ficheMotCle): self
//        {
//            if (!$this->ficheMotCles->contains($ficheMotCle)) {
//                $this->ficheMotCles[] = $ficheMotCle;
//                $ficheMotCle->setMotCle($this);
//            }

//            return $this;
//        }

//        public function removeFicheMotCle(FicheMotCle $ficheMotCle): self
//        {
//            if ($this->ficheMotCles->contains($ficheMotCle)) {
//                $this->ficheMotCles->removeElement($ficheMotCle);
//                // set the owning side to null (unless already changed)
//                if ($ficheMotCle->getMotCle() === $this) {
//                    $ficheMotCle->setMotCle(null);
//                }
//            }

//            return $this;
//        }

}