<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="idH", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idh;

    /**
     * @var int
     *
     * @ORM\Column(name="numC", type="bigint", nullable=false)
     */
    private $numc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOrder", type="date", nullable=false)
     */
    private $dateorder;

    /**
     * @var string
     *
     * @ORM\Column(name="Product", type="string", length=50, nullable=false)
     */
    private $product;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

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
