<?php

namespace App\Entity;

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


}
