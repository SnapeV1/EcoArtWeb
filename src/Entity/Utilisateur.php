<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
=======
use Doctrine\DBAL\Types\Types;
>>>>>>> origin/firas
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

<<<<<<< HEAD
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
=======
    #[Assert\NotBlank(message:"Name can't be empty")]
    #[ORM\Column(length:30)]
    private ?string $nom= null;

    #[Assert\NotBlank(message:"Lastname can't be empty")]
    #[ORM\Column(length:30)]
    private ?string $prenom=null;

    #[Assert\NotBlank(message:"Birthdate can't be empty")]
    #[Assert\Date(message:"Invalid date")]
    #[ORM\Column(length:30)]
    private $dateNaissance=null;
>>>>>>> origin/firas

    #[Assert\Length(min:8 , minMessage:"Cin too short")]
    #[ORM\Column(length:10)]
    private ?string $cin=null;

<<<<<<< HEAD
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
=======
    #[ORM\Column]
    private ?int $age=null;

    #[ORM\Column(length:200)]
    private ?string $pic=null;

    #[ORM\Column(length:20)]
    private ?string $username=null;
    #[Assert\NotBlank(message:"Password can't be null")]
    #[ORM\Column(length:40)]
    private ?string $password=null;
    #[Assert\NotBlank(message:"Email can't be empty")]
    #[Assert\Email(message:"Invalid Email")]
    #[ORM\Column(length:100)]
    private ?string $email=null;

    #[ORM\Column(length:15)]
    private ?string $type;

    public function getId(): ?string
>>>>>>> origin/firas
    {
        return $this->id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
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
=======
>>>>>>> origin/firas
    public function getNom(): ?string
    {
        return $this->nom;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function setNom(?string $nom): self
=======
    public function setNom(string $nom): static
>>>>>>> yoser
=======
    public function setNom(string $nom): static
>>>>>>> origin/ons
=======
    public function setNom(string $nom): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setPrenom(?string $prenom): self
=======
    public function setPrenom(string $prenom): static
>>>>>>> yoser
=======
    public function setPrenom(string $prenom): static
>>>>>>> origin/ons
=======
    public function setPrenom(string $prenom): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setDateNaissance(?string $dateNaissance): self
=======
    public function setDateNaissance(string $dateNaissance): static
>>>>>>> yoser
=======
    public function setDateNaissance(string $dateNaissance): static
>>>>>>> origin/ons
=======
    public function setDateNaissance(string $dateNaissance): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setCin(?string $cin): self
=======
    public function setCin(string $cin): static
>>>>>>> yoser
=======
    public function setCin(string $cin): static
>>>>>>> origin/ons
=======
    public function setCin(string $cin): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setAge(?int $age): self
=======
    public function setAge(int $age): static
>>>>>>> yoser
=======
    public function setAge(int $age): static
>>>>>>> origin/ons
=======
    public function setAge(int $age): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setPic(?string $pic): self
=======
    public function setPic(string $pic): static
>>>>>>> yoser
=======
    public function setPic(string $pic): static
>>>>>>> origin/ons
=======
    public function setPic(string $pic): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setUsername(?string $username): self
=======
    public function setUsername(string $username): static
>>>>>>> yoser
=======
    public function setUsername(string $username): static
>>>>>>> origin/ons
=======
    public function setUsername(string $username): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setPassword(?string $password): self
=======
    public function setPassword(string $password): static
>>>>>>> yoser
=======
    public function setPassword(string $password): static
>>>>>>> origin/ons
=======
    public function setPassword(string $password): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setEmail(?string $email): self
=======
    public function setEmail(string $email): static
>>>>>>> yoser
=======
    public function setEmail(string $email): static
>>>>>>> origin/ons
=======
    public function setEmail(string $email): static
>>>>>>> origin/firas
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
<<<<<<< HEAD
    public function setType(?string $type): self
=======
    public function setType(string $type): static
>>>>>>> yoser
=======
    public function setType(string $type): static
>>>>>>> origin/ons
=======
    public function setType(string $type): static
>>>>>>> origin/firas
    {
        $this->type = $type;

        return $this;
    }
<<<<<<< HEAD
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
=======


>>>>>>> origin/firas
}
