<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use App\Repository\CommentaireRepository;
/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    /**
     
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    #[ORM\ID]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     *
     *
     * @ORM\Column(name="iduser", type="bigint", nullable=false)
     */
    #[ORM\Column]
    private ?int $iduser = null;

    /**
     * 
     *
     * @ORM\Column(name="idformation", type="bigint", nullable=false)
     */
    #[ORM\Column]
    private ? int $idformation = null;

    /**
     * 
     *
     * @ORM\Column(name="text", type="string", length=250, nullable=false)
     */
    #[ORM\Column(length: 1000)]
    private ?string $text = null;

    /**
     * 
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    #[ORM\Column]
    private ?DateTime $date = null;

    /**
     * 
     *
     * @ORM\Column(name="evaluation", type="integer", nullable=false)
     */
    #[ORM\Column]
    private ?int $evaluation = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIduser(): ?string
    {
        return $this->iduser;
    }

    public function setIduser(string $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdformation(): ?string
    {
        return $this->idformation;
    }

    public function setIdformation(string $idformation): static
    {
        $this->idformation = $idformation;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(int $evaluation): static
    {
        $this->evaluation = $evaluation;

        return $this;
    }

}
