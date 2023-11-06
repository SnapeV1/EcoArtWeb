<?php

namespace App\Entity;

<<<<<<< HEAD
<<<<<<< HEAD
use DateTime;
=======
use Doctrine\DBAL\Types\Types;
>>>>>>> yoser
=======
use Doctrine\DBAL\Types\Types;
>>>>>>> origin/ons
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
