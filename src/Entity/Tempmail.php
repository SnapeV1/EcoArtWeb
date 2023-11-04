<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempmail
 *
 * @ORM\Table(name="tempmail")
 * @ORM\Entity
 */
class Tempmail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="idGroup", type="integer", nullable=false)
     */
    private $idgroup;


}
