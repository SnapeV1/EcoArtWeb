<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var int
     *
     * @ORM\Column(name="Gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Gid;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;



    public function getId(): ?int
    {
        return $this->Gid;
    }

    public function getnom(): ?String
    {
        return $this->nom;
    }
    public function getsize(): ?int
    {
        return $this->size;
    }
    public function getlogo(): ?String
    {
        return $this->logo;
    }


    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

   
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }


    public function setLogo(?string $logo): void
    {
        $this->logo = $logo;
    }

}
