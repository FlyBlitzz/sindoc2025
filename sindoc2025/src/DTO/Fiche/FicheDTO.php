<?php
namespace App\DTO\Fiche;

class FicheDTO
{
    public bool $isAdmin;
    public string $edition;
    public string $texte;
    public string $traduction;
    public string $notes;
    public string $commentaire;
    public string $motCles;
    public string $refer;
    public string $livre;
    public string $denomination;
    public string $statut;
    public bool $visible;
    public int $Id;
    public bool $canEdit;

    public function __construct(
        int $id, 
        string $refer, 
        string $livre, 
        string $denomination, 
        string $statut, 
        bool $visible, 
        bool $canEdit,
        string $edition='', 
        string $texte='', 
        string $traduction='', 
        string $notes='', 
        string $commentaire='', 
        string $motCles=''
        
    ) {
        $this->Id = $id;
        $this->refer = $refer;
        $this->livre = $livre;
        $this->denomination = $denomination ?? '';
        $this->statut = $statut;
        $this->visible = $visible;
        $this->edition = $edition ?? '';
        $this->texte = $texte ?? '';
        $this->traduction = $traduction ?? '';
        $this->notes = $notes ?? '';
        $this->commentaire = $commentaire ?? '';
        $this->motCles = $motCles ?? '';
        $this->canEdit = $canEdit ?? false;
    }
}
