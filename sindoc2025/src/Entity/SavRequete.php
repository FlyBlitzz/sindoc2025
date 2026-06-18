<?php

namespace App\Entity;

use App\Repository\SavRequeteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: SavRequeteRepository::class)]
class SavRequete
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255,  nullable: true)]
    #[Assert\NotBlank()]
    private ?string $nom_requete = null;

    #[ORM\Column(length: 1000)]
    private ?string $requete = null;
    #[ORM\Column(type:"json", nullable:false)]
    private ?string $requete_parameters;
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $create_date = null;

    #[ORM\Column(type: "time", nullable: true)]
    private ?\DateTimeInterface $heure = null;

    #[ORM\ManyToOne(inversedBy: 'savRequetes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;



    public function getIdSavRequete(): ?int
    {
        return $this->id;
    }


    public function getNomRequete(): ?string
    {
        return $this->nom_requete;
    }

    public function setNomRequete(string $nom_requete): static
    {
        $this->nom_requete = $nom_requete;

        return $this;
    }
    public function getRequeteParams(): ?string
    {
        return $this->requete_parameters;
    }

    public function setRequeteParams(string $requeteParams): static
    {
        $this->requete_parameters = $requeteParams;

        return $this;
    }
    public function getRequete(): ?string
    {
        return $this->requete;
    }

    public function setRequete(string $requete): static
    {
        $this->requete = $requete;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeInterface $create_date): static
    {
        $this->create_date = $create_date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): static
    {
        $this->heure = $heure;

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
}
