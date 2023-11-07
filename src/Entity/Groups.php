<?php

namespace App\Entity;

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
    /*public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }*/
   
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
    