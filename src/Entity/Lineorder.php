<?php

namespace App\Entity;
use App\Entity\Commande;

use Doctrine\ORM\Mapping as ORM;
use PHPUnit\TextUI\Command;

/**
 * Lineorder
 *
 * @ORM\Table(name="lineorder", indexes={@ORM\Index(name="fk_idC", columns={"id_c"})})
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass:LineorderRepository::class)]
class Lineorder
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idO= null;

  
    #[ORM\Column(length:50)]
    private ?string $productname=null;

  
    #[ORM\Column]
    private ? int $quantite=null;

  
    #[ORM\Column]
    private ?float $prix=null;

    
    #[ORM\ManyToOne(inversedBy:'Lineorder')]
    private ?Command $idC=null;

    public function getIdO(): ?int
    {
        return $this->idO;
    }

    public function getProductname(): ?string
    {
        return $this->productname;
    }

    public function setProductname(string $productname): static
    {
        $this->productname = $productname;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIdC(): ?Commande
    {
        return $this->idC;
    }

    public function setIdC(?Commande $idC): static
    {
        $this->idC = $idC;

        return $this;
    }

   


}
