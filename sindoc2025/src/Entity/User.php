<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(nullable: false)]
    private ?bool $active = null;

    #[ORM\Column(nullable: false)]
    private ?bool $valide = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Fiche::class, cascade: ['remove'])]
    private Collection $fiches;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: SavRequete::class, cascade: ['remove'])]
    private Collection $savRequetes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Historique::class, cascade: ['remove'])]
    private Collection $historiques;

    public function __construct()
        {
            $this->fiches = new ArrayCollection();
            $this->savRequetes = new ArrayCollection();
            $this->historiques = new ArrayCollection();
            $this->active = false;
        }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function isActive(): ?bool
    {
    return $this->active;
    }

    public function setActive(bool $active): static
    {
    $this->active = $active;
    return $this;
    }

    public function isValide(): ?bool
    {
    return $this->valide;
    }

    public function setValide(bool $valide): static
    {
    $this->valide = $valide;
    return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // $this->plainPassword = null;
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
            $fiche->setUser($this);
        }

        return $this;
    }

    public function removeFiche(Fiche $fiche): static
    {
        if ($this->fiches->removeElement($fiche)) {
            // set the owning side to null (unless already changed)
            if ($fiche->getUser() === $this) {
                $fiche->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SavRequete>
     */
    public function getSavRequetes(): Collection
    {
        return $this->savRequetes;
    }

    public function addSavRequete(SavRequete $savRequete): static
    {
        if (!$this->savRequetes->contains($savRequete)) {
            $this->savRequetes->add($savRequete);
            $savRequete->setUser($this);
        }

        return $this;
    }

    public function removeSavRequete(SavRequete $savRequete): static
    {
        if ($this->savRequetes->removeElement($savRequete)) {
            if ($savRequete->getUser() === $this) {
                $savRequete->setUser(null);
            }
        }

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
            $historique->setUser($this);
        }

        return $this;
    }

    public function removeHistorique(Historique $historique): static
    {
        if ($this->historiques->removeElement($historique)) {
            if ($historique->getUser() === $this) {
                $historique->setUser(null);
            }
        }

        return $this;
    }
 public function __toString()
    {
        return $this->getUsername();
    }

}
