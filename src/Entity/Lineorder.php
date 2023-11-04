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


}
