<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table(name="conversation", indexes={@ORM\Index(name="idUser2", columns={"idUser2"}), @ORM\Index(name="idUser1", columns={"idUser1"})})
 * @ORM\Entity
 */
class Conversation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idconv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idconv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_MSG", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dateMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Msg", type="text", length=65535, nullable=true)
     */
    private $msg;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser2", referencedColumnName="id")
     * })
     */
    private $iduser2;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser1", referencedColumnName="id")
     * })
     */
    private $iduser1;

    public function getIdconv(): ?int
    {
        return $this->idconv;
    }

    public function getDateMsg(): ?\DateTimeInterface
    {
        return $this->dateMsg;
    }

    public function getMsg(): ?string
    {
        return $this->msg;
    }

    public function setMsg(?string $msg): static
    {
        $this->msg = $msg;

        return $this;
    }

    public function getIduser2(): ?Utilisateur
    {
        return $this->iduser2;
    }

    public function setIduser2(?Utilisateur $iduser2): static
    {
        $this->iduser2 = $iduser2;

        return $this;
    }

    public function getIduser1(): ?Utilisateur
    {
        return $this->iduser1;
    }

    public function setIduser1(?Utilisateur $iduser1): static
    {
        $this->iduser1 = $iduser1;

        return $this;
    }


}
