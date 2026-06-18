<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "fichemotcle")]
class FicheMotCle
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Fiche::class, inversedBy: 'ficheMotCles')]
    #[ORM\JoinColumn(name: "fiche", nullable: false)]
    private ?Fiche $fiche = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: MotCle::class, inversedBy: 'ficheMotCles')]
    #[ORM\JoinColumn(name: "motcle", nullable: false)]
    private ?MotCle $motCle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $precision = null;

    public function getFiche(): ?Fiche
    {
        return $this->fiche;
    }

    public function setFiche(?Fiche $fiche): self
    {
        $this->fiche = $fiche;
        return $this;
    }

    public function getMotCle(): ?MotCle
    {
        return $this->motCle;
    }

    public function setMotCle(?MotCle $motCle): self
    {
        $this->motCle = $motCle;
        return $this;
    }

    public function getPrecision(): ?string
    {
        return $this->precision;
    }

    public function setPrecision(?string $precision): self
    {
        $this->precision = $precision;
        return $this;
    }
}

// #[ORM\Entity]
// #[ORM\Table(name: "fichemotcle")]
// class FicheMotCle
// {

//     #[ORM\Id]
//     #[ORM\ManyToOne(targetEntity: Fiche::class, inversedBy: 'ficheMotCles')]
//     #[ORM\JoinColumn(name: "fiche", nullable: false)]
//     private ?Fiche $fiche = null;

//     #[ORM\Id]
//     #[ORM\ManyToOne(targetEntity: MotCle::class, inversedBy: 'ficheMotCles')]
//     #[ORM\JoinColumn(name: "motcle", nullable: false)]
//     private ?MotCle $motCle = null;
    
//     #[ORM\Column(length: 255, nullable: true)]
//     private ?string $precision = null;


//     public function getFiche(): ?Fiche
//     {
//         return $this->fiche;
//     }

//     public function setFiche(?Fiche $fiche): self
//     {
//         $this->fiche = $fiche;

//         return $this;
//     }

//     public function getMotCle(): ?MotCle
//     {
//         return $this->motCle;
//     }

//     public function setMotCle(?MotCle $motCle): self
//     {
//         $this->motCle = $motCle;

//         return $this;
//     }

//     public function getPrecision(): ?string
//     {
//         return $this->precision;
//     }

//     public function setPrecision(?string $precision): self
//     {
//         $this->precision = $precision;

//         return $this;
//     }



// }