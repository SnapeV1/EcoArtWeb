<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventadmin
 *
 * @ORM\Table(name="eventadmin")
 * @ORM\Entity
 */
class Eventadmin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idA;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_a", type="string", length=30, nullable=false)
     */
    private $nomA;

    /**
     * @var string
     *
     * @ORM\Column(name="date_a", type="string", length=30, nullable=false)
     */
    private $dateA;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_a", type="string", length=30, nullable=false)
     */
    private $lieuA;

    /**
     * @var string
     *
     * @ORM\Column(name="description_a", type="string", length=100, nullable=false)
     */
    private $descriptionA;

    /**
     * @var string
     *
     * @ORM\Column(name="image_a", type="text", length=16777215, nullable=false)
     */
    private $imageA;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_a", type="integer", nullable=false)
     */
    private $prixA;

    /**
     * @var string
     *
     * @ORM\Column(name="path_qr", type="string", length=255, nullable=false)
     */
    private $pathQr;


}
