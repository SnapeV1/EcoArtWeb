<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormationRepository;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    /**
     * 
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    #[ORM\Column(length: 150)]
    private ?string $titre = null;

    /**
     * 
     *
     * @ORM\Column(name="categories", type="string", length=50, nullable=false)
     */
    #[ORM\Column(length: 150)]
    private ?string $categories = null;

    /**
     * 
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    #[ORM\Column]
    private ?float $prix = null;

    /**
     * 
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=false)
     */
    #[ORM\Column]
    private ?float $remise = null;

    /**
     * 
     *
     * @ORM\Column(name="duree", type="string", length=50, nullable=false)
     */
    #[ORM\Column(length: 100)]
    private ?string $duree;

    /**
     * 
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    #[ORM\Column(length: 1000)]
    private ?string $description = null ;

    /**
     * 
     *
     * @ORM\Column(name="video", type="string", length=1000, nullable=false)
     */
    #[ORM\Column(length: 1000)]
    private ?string $video = null ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(string $categories): static
    {
        $this->categories = $categories;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): static
    {
        $this->remise = $remise;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): static
    {
        $this->video = $video;

        return $this;
    }

   


}
