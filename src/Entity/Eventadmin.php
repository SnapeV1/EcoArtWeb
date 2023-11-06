<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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

    public function getIdA(): ?int
    {
        return $this->idA;
    }

    public function getNomA(): ?string
    {
        return $this->nomA;
    }

    public function setNomA(string $nomA): static
    {
        $this->nomA = $nomA;

        return $this;
    }

    public function getDateA(): ?string
    {
        return $this->dateA;
    }

    public function setDateA(string $dateA): static
    {
        $this->dateA = $dateA;

        return $this;
    }

    public function getLieuA(): ?string
    {
        return $this->lieuA;
    }

    public function setLieuA(string $lieuA): static
    {
        $this->lieuA = $lieuA;

        return $this;
    }

    public function getDescriptionA(): ?string
    {
        return $this->descriptionA;
    }

    public function setDescriptionA(string $descriptionA): static
    {
        $this->descriptionA = $descriptionA;

        return $this;
    }

    public function getImageA(): ?string
    {
        return $this->imageA;
    }

    public function setImageA(string $imageA): static
    {
        $this->imageA = $imageA;

        return $this;
    }

    public function getPrixA(): ?int
    {
        return $this->prixA;
    }

    public function setPrixA(int $prixA): static
    {
        $this->prixA = $prixA;

        return $this;
    }

    public function getPathQr(): ?string
    {
        return $this->pathQr;
    }

    public function setPathQr(string $pathQr): static
    {
        $this->pathQr = $pathQr;

        return $this;
    }


}
