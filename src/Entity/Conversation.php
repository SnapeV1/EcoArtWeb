<?php

namespace App\Entity;
use App\Entity\Utilisateur;
use DateTime;
use Doctrine\DBAL\Types\Types;
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
     * @var int
     *
     * @ORM\Column(name="idconv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $idconv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_MSG", type="datetime", nullable=false)
     */
    private ?DateTime $dateMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Msg", type="text", length=65535, nullable=true)
     */
    private ?String $msg;

   /**
     * @ORM\Column(name="iduser1", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumn(name="iduser1", referencedColumnName="id")
     */
    private ?int $iduser1;
/**
     * @ORM\Column(name="iduser2", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumn(name="iduser2", referencedColumnName="id")
     */
    
    private ?int $iduser2;

    public function getIdconv(): ?int
    {
        return $this->idconv;
    }

    public function getDateMsg(): ?\DateTimeInterface
    {
        return $this->dateMsg;
    }

    public function setDateMsg(\DateTimeInterface $dateMsg): static
    {
        $this->dateMsg = $dateMsg;

        return $this;
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

    public function getIduser1(): ?int
    {
        return $this->iduser1;
    }

    public function setIduser1(?int $iduser1): static
    {
        $this->iduser1 = $iduser1;

        return $this;
    }

    public function getIduser2(): ?int
    {
        return $this->iduser2;
    }

    public function setIduser2(?int $iduser2): static
    {
        $this->iduser2 = $iduser2;

        return $this;
    }


}
