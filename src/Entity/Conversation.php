<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table(name="conversation", indexes={@ORM\Index(name="idUser1", columns={"idUser1"}), @ORM\Index(name="idUser2", columns={"idUser2"})})
 * @ORM\Entity
 */
class Conversation
{
    /**
     *
     *
     * @ORM\Column(name="idconv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private ?int $idconv=null;
  
    /**
     * 
     *
     * @ORM\Column(name="Date_MSG", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private ?DateTime $dateMsg;

    /**
     * 
     *
     * @ORM\Column(name="Msg", type="text", length=65535, nullable=true)
     */
    private ?String $msg;

    /**
     *
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser2", referencedColumnName="id")
     * })
     */
    private ?int $iduser2;

    /**
     * 
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser1", referencedColumnName="id")
     * })
     */
    private ?int $iduser1;


}
