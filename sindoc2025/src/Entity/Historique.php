<?php

namespace App\Entity;

use App\Repository\HistoriqueRepository;
use Doctrine\DBAL\Types\Types;
use App\Entity\Fiche;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 250)]
    private ?string $type_modif = null;

    #[ORM\ManyToOne(targetEntity: Fiche::class, inversedBy: 'historiques')]
    #[ORM\JoinColumn(name: 'fiche_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?Fiche $fiche = null;

    public function getFiche(): ?Fiche
    {
        return $this->fiche;
    }

    public function setFiche(?Fiche $fiche): static
    {
        $this->fiche = $fiche;
        return $this;
    }

    #[ORM\ManyToOne(inversedBy: 'historiques')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    public ?int $ficheID = null;

    #[ORM\Column(nullable: true)]
    public ?int $livreID = null;

    #[ORM\Column(nullable: true)]
    public ?int $indexID = null;

    #[ORM\Column(nullable: true)]
    public ?int $statutID = null;

    #[ORM\Column(nullable: true)]
    public ?int $mot_cleID = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $create_date = null;

    #[ORM\Column(type: "time", nullable: true)]
    private ?\DateTimeInterface $heure = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private $data;

    #[ORM\Column(type: 'json', nullable: true)]
    private $old_data;



    public function getIdHistorique(): ?string
    {
        return $this->id;
    }


    public function getTypeModif(): ?string
    {
        return $this->type_modif;
    }

    public function setTypeModif(string $type_modif): static
    {
        $this->type_modif = $type_modif;

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

    public function getFicheID(): ?int
    {
        return $this->ficheID;
    }

    public function setFicheID(?int $ficheID): static
    {
        $this->ficheID = $ficheID;

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

    public function getLivreID(): ?int
    {
        return $this->livreID;
    }

    public function setLivreID(?int $livreID): static
    {
        $this->livreID = $livreID;

        return $this;
    }

    public function getIndexID(): ?int
    {
        return $this->indexID;
    }

    public function setIndexID(?int $indexID): static
    {
        $this->indexID = $indexID;

        return $this;
    }

    public function getStatutID(): ?int
    {
        return $this->statutID;
    }

    public function setStatutID(?int $statutID): static
    {
        $this->statutID = $statutID;

        return $this;
    }

    public function getMotCleID(): ?int
    {
        return $this->mot_cleID;
    }

    public function setMotCleID(?int $mot_cleID): static
    {
        $this->mot_cleID = $mot_cleID;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData($objet, $id = null): static
    {
        switch (get_class($objet)) {
            case Livre::class:
                // Extraire les données spécifiques à SomeEntity
                $this->data = [
                    "ID" => $objet->getIdLivre(),
                    "Nom" => $objet->getNom(),
                ];
                break;

            case Fiche::class:
                // Extraire les données spécifiques à AnotherEntity
                // dd($objet->getMotCles());
                $this->data = [
                    "ID de la fiche dupliquée" => $id,
                    "Numéro" => $objet->getNumFiche(),
                    "Livre" => $objet->getLivre()->getNom(),
                    "Édition" => $objet->getEdition(),
                    "Référence" => $objet->getRefer(),
                    "Dénomination" => $objet->getDenomination(),
                    "Statut" => $objet->getStatut()->getDenomination(),
                    "Texte" => $objet->getTexte(),
                    "Traduction" => $objet->getTraduction(),
                    "Notes" => $objet->getNotes(),
                    "Commentaires" => $objet->getCommentaire(),
                    "Mots Clés" => array_map(function ($motCle) {
                        return $motCle->getReference() . " : " . $motCle->getDenomination();
                    }, $objet->getMotCles()) // Adding the MotCle details
                ];
                break;

            case ($objet instanceof Index || ($objet instanceof \Doctrine\Persistence\Proxy && $objet instanceof Index)):
                // Extraire les données spécifiques à AnotherEntity
                $this->data = [
                    "ID" => $objet->getIdIndex(),
                    "Nom" => $objet->getNom()
                ];
                break;

            case Statut::class:
                // Extraire les données spécifiques à AnotherEntity
                $this->data = [
                    "ID" => $objet->getIdStatut(),
                    "Dénomination" => $objet->getDenomination()
                ];
                break;

            case MotCle::class:
                // Extraire les données spécifiques à AnotherEntity
                $this->data = [
                    "ID" => $objet->getIdMotCle(),
                    "Référence" => $objet->getReference(),
                    "Dénomination" => $objet->getDenomination()
                ];
                break;

            default:
                throw new \InvalidArgumentException(sprintf(
                    "L'entité de type '%s' n'est pas prise en charge.",
                    get_class($objet)
                ));
        }

        return $this;
    }

    public function getOldData(): ?array
    {
        return $this->old_data;
    }

    public function setOldData($objet): static
    {
        switch (get_class($objet)) {
            case Livre::class:
                // Extraire les données spécifiques à un livre
                $this->old_data = [
                    "ID" => $objet->getIdLivre(),
                    "Nom" => $objet->getNom(),
                ];
                break;

            case Fiche::class:
                // Extraire les données spécifiques à une fiche
                $this->old_data = [
                    "Numéro" => $objet->getNumFiche(),
                    "Livre" => $objet->getLivre()->getNom(),
                    "Édition" => $objet->getEdition(),
                    "Référence" => $objet->getRefer(),
                    "Dénomination" => $objet->getDenomination(),
                    "Statut" => $objet->getStatut()->getDenomination(),
                    "Texte" => $objet->getTexte(),
                    "Traduction" => $objet->getTraduction(),
                    "Notes" => $objet->getNotes(),
                    "Commentaires" => $objet->getCommentaire(),
                    "Mots Clés" => array_map(function ($motCle) {
                        return $motCle->getReference() . " : " . $motCle->getDenomination();
                    }, $objet->getMotCles()) // Adding the MotCle details
                ];
                break;

            case ($objet instanceof Index || ($objet instanceof \Doctrine\Persistence\Proxy && $objet instanceof Index)):
                // Extraire les données spécifiques à un index
                $this->old_data = [
                    "ID" => $objet->getIdIndex(),
                    "Nom" => $objet->getNom()
                ];
                break;

            case Statut::class:
                // Extraire les données spécifiques à un statut
                $this->old_data = [
                    "ID" => $objet->getIdStatut(),
                    "Dénomination" => $objet->getDenomination()
                ];
                break;

            case MotCle::class:
                // Extraire les données spécifiques à mot clé
                $this->old_data = [
                    "ID" => $objet->getIdMotCle(),
                    "Référence" => $objet->getReference(),
                    "Dénomination" => $objet->getDenomination()
                ];
                break;

            default:
                throw new \InvalidArgumentException(sprintf(
                    "L'entité de type '%s' n'est pas prise en charge.",
                    get_class($objet)
                ));
        }

        return $this;
    }


}