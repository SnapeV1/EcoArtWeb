<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventuser
 *
 * @ORM\Table(name="eventuser")
 * @ORM\Entity
 */
class Eventuser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
   
    private ?int $id = null;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    #[ORM\Column(length:30)]
    private ?string $nom = null;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=30, nullable=false)
     */
    #[ORM\Column(length:30)]
    private ?string $date = null;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=30, nullable=false)
     */
    #[ORM\Column(length:30)]
    private ?string $lieu = null;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    #[ORM\Column(length:100)]
    private ?string $description = null;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    #[ORM\Column(length:100)]
    private ?string $image=null;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private ?int $prix =null;

   


    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id)
    {
        $this->id = $id;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function setNom(?string $nom)
    {
        $this->nom = $nom;
    }
    public function getDate(): ?string
    {
        return $this->date;
    }
    public function setDate(?string $date)
    {
        $this->date = $date;
    }
    public function getlieu(): ?string
    {
        return $this->lieu;
    }
    public function setlieu(?string $lieu)
    {
        $this->lieu = $lieu;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setImage(?string $image)
    {
        $this->image = $image;
    }
    public function getPrix(): ?int
    {
        return $this->prix;
    }
    public function setPrix(?int $prix)
    {
        $this->prix = $prix;
    }
   /* public function getParthQR(): ?string
    {
        return $this->pathQr;
    }
    public function setPathQR(?string $pathQr): static
    {
        $this->pathQr = $pathQr;
    }*/
    
}
