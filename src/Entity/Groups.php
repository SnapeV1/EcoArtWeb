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
     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */
    private ?int $id = null;

 

   /**
     * @ORM\Column(type="string")
     */
    private ?String $nom;

   
    /**
     * @ORM\Column(type="integer")
     */
    private ?int $size=0;
    /**
     * @ORM\Column(type="string")
     */
    private ?String $logo;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }
<<<<<<< HEAD
=======
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
>>>>>>> yoser
