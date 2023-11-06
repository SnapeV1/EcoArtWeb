<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;



#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

    #[ORM\Column(length:200)]
    private ?string $contenu=null;

    #[ORM\Column(length:30)]
    private ?string $etat=null;

    #[ORM\Column(length:200)]
    private ?string $reponse=null;

    #[ORM\Column]
    private ?int $senderid = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(?string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getSenderid(): ?string
    {
        return $this->senderid;
    }

    public function setSenderid(string $senderid): static
    {
        $this->senderid = $senderid;

        return $this;
    }

}