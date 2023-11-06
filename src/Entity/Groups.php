<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="Size", type="integer", nullable=false)
     */
    private $size=0;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=500, nullable=false)
     */
    private $logo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="groupid")
     * @ORM\JoinTable(name="membre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="GroupID", referencedColumnName="Gid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="UserID", referencedColumnName="id")
     *   }
     * )
     */
    private $userid = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->gid;
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
        $this->gid = $id;
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

    public function getGid(): ?int
    {
        return $this->gid;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Utilisateur $userid): static
    {
        if (!$this->userid->contains($userid)) {
            $this->userid->add($userid);
        }

        return $this;
    }

    public function removeUserid(Utilisateur $userid): static
    {
        $this->userid->removeElement($userid);

        return $this;
    }

}
