<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=false)
     */
    private ?String $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=40, nullable=false)
     */
    private ?String $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance", type="string", length=10, nullable=false)
     */
    private ?String $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=10, nullable=false)
     */
    private $cin;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private ?int $age;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=500, nullable=false)
     */
    private ?String $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private ?String $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private ?String $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private ?String $email;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private ?String $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groups", mappedBy="userid")
     */


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupid = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/ons
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
>>>>>>> yoser
=======
>>>>>>> origin/ons
    public function getNom(): ?string
    {
        return $this->nom;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setNom(?string $nom): self
=======
    public function setNom(string $nom): static
>>>>>>> yoser
=======
    public function setNom(string $nom): static
>>>>>>> origin/ons
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setPrenom(?string $prenom): self
=======
    public function setPrenom(string $prenom): static
>>>>>>> yoser
=======
    public function setPrenom(string $prenom): static
>>>>>>> origin/ons
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setDateNaissance(?string $dateNaissance): self
=======
    public function setDateNaissance(string $dateNaissance): static
>>>>>>> yoser
=======
    public function setDateNaissance(string $dateNaissance): static
>>>>>>> origin/ons
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setCin(?string $cin): self
=======
    public function setCin(string $cin): static
>>>>>>> yoser
=======
    public function setCin(string $cin): static
>>>>>>> origin/ons
    {
        $this->cin = $cin;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setAge(?int $age): self
=======
    public function setAge(int $age): static
>>>>>>> yoser
=======
    public function setAge(int $age): static
>>>>>>> origin/ons
    {
        $this->age = $age;

        return $this;
    }

    public function getPic(): ?string
    {
        return $this->pic;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setPic(?string $pic): self
=======
    public function setPic(string $pic): static
>>>>>>> yoser
=======
    public function setPic(string $pic): static
>>>>>>> origin/ons
    {
        $this->pic = $pic;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setUsername(?string $username): self
=======
    public function setUsername(string $username): static
>>>>>>> yoser
=======
    public function setUsername(string $username): static
>>>>>>> origin/ons
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setPassword(?string $password): self
=======
    public function setPassword(string $password): static
>>>>>>> yoser
=======
    public function setPassword(string $password): static
>>>>>>> origin/ons
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setEmail(?string $email): self
=======
    public function setEmail(string $email): static
>>>>>>> yoser
=======
    public function setEmail(string $email): static
>>>>>>> origin/ons
    {
        $this->email = $email;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setType(?string $type): self
=======
    public function setType(string $type): static
>>>>>>> yoser
=======
    public function setType(string $type): static
>>>>>>> origin/ons
    {
        $this->type = $type;

        return $this;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/ons

    /**
     * @return Collection<int, Groups>
     */
    public function getGroupid(): Collection
    {
        return $this->groupid;
    }

    public function addGroupid(Groups $groupid): static
    {
        if (!$this->groupid->contains($groupid)) {
            $this->groupid->add($groupid);
            $groupid->addUserid($this);
        }

        return $this;
    }

    public function removeGroupid(Groups $groupid): static
    {
        if ($this->groupid->removeElement($groupid)) {
            $groupid->removeUserid($this);
        }

        return $this;
    }

<<<<<<< HEAD
>>>>>>> yoser
=======
>>>>>>> origin/ons
}
