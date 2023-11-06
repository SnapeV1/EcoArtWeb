<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=150, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=15, nullable=false)
     */
    private $etat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reponse", type="string", length=150, nullable=true)
     */
    private $reponse;

    /**
     * @var int
     *
     * @ORM\Column(name="senderid", type="bigint", nullable=false)
     */
    private $senderid;


}
