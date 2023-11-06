<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineorder
 *
 * @ORM\Table(name="lineorder", indexes={@ORM\Index(name="fk_idC", columns={"id_c"})})
 * @ORM\Entity
 */
class Lineorder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_o", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idO;

    /**
     * @var string
     *
     * @ORM\Column(name="productName", type="string", length=50, nullable=false)
     */
    private $productname;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_c", referencedColumnName="id_c")
     * })
     */
    private $idC;

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
