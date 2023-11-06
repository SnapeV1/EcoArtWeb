<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;



 
#[ORM\Entity(repositoryClass: GroupRepository::class)]


 /**
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
<<<<<<< HEAD
     /**
=======
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
>>>>>>> origin/ons
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */
<<<<<<< HEAD
    private ?int $id = null;

 

   /**
     * @ORM\Column(type="string")
     */
    private ?String $nom;
=======
    private $id;

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
    private $size;
>>>>>>> origin/ons

   
    /**
<<<<<<< HEAD
     * @ORM\Column(type="integer")
=======
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
>>>>>>> origin/ons
     */
    private ?int $size=0;
    /**
     * @ORM\Column(type="string")
     */
    private ?String $logo;


<<<<<<< HEAD

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }
<<<<<<< HEAD
=======
=======
>>>>>>> origin/ons
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

<<<<<<< HEAD

    public function setId(?int $id): void
    {
        $this->gid = $id;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

>>>>>>> yoser
   
        public function getid() {
            return $this->id;
        }
    
        public function getNom() {
            return $this->nom;
        }
    
        public function getSize() {
            return $this->size;
        }
    
        public function getLogo() {
            return $this->logo;
        }
    
       
        // Setters
        public function setGid($id) {
            $this->id = $id;
        }
    
        public function setNom($nom) {
            $this->nom = $nom;
        }
    
        public function setSize($size) {
            $this->size = $size;
        }
    
        public function setLogo($logo) {
            $this->logo = $logo;
        }
    
      
        
     
    }
    


<<<<<<< HEAD
=======
    public function setLogo(?string $logo): void
=======
    public function setLogo(string $logo): static
>>>>>>> origin/ons
    {
        $this->logo = $logo;

        return $this;
    }

<<<<<<< HEAD
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
=======
>>>>>>> origin/ons

}
>>>>>>> yoser
