<?php

namespace App\Entity;

<<<<<<< HEAD
use DateTime;
=======
>>>>>>> origin/ons
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass:HistoriqueRepository::class)]
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="idH", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ? int $idh=null;

    #[ORM\Column]
    private ? int $numc=null;

   
    #[ORM\Column]
    private ?DateTime $dateorder=null;

     
    #[ORM\Column(length:50)]
    private ? string $product=null;

    
    #[ORM\Column]
    private ? float $prix=null;

    #[ORM\Column]
    private ?int $quantite=null;

    public function getIdh(): ?int
    {
        return $this->idh;
    }

    public function getNumc(): ?string
    {
        return $this->numc;
    }

    public function setNumc(string $numc): static
    {
        $this->numc = $numc;

        return $this;
    }

    public function getDateorder(): ?\DateTimeInterface
    {
        return $this->dateorder;
    }

    public function setDateorder(\DateTimeInterface $dateorder): static
    {
        $this->dateorder = $dateorder;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdh(): ?int
    {
        return $this->idh;
    }

    public function getNumc(): ?string
    {
        return $this->numc;
    }

    public function setNumc(string $numc): static
    {
        $this->numc = $numc;

        return $this;
    }

    public function getDateorder(): ?\DateTimeInterface
    {
        return $this->dateorder;
    }

    public function setDateorder(\DateTimeInterface $dateorder): static
    {
        $this->dateorder = $dateorder;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }


}
