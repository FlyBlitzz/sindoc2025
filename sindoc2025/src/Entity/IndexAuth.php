<?php

namespace App\Entity;

use App\Repository\IndexAuthRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndexAuthRepository::class)]
class IndexAuth
{

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Id]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    #[ORM\ManyToOne(inversedBy: 'index_auth')]
    private ?Index $index = null;

    // Getters and Setters
    public function getId(): ?int
    {
        return $id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getIndex(): ?Index
    {
        return $this->index;
    }

    public function setIndex(?Index $index): self
    {
        $this->index = $index;

        return $this;
    }
}