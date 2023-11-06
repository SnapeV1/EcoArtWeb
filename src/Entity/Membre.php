<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\DBAL\Types\BigIntType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembreRepository::class)]
 /**
 * @ORM\Table(name="membre")
 * @ORM\Entity
 */
class Membre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id ;

    /**
     * @ORM\Column(type="string", length=50,name="Role")
     */
    private ?string $role;

    /**
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumn(name="GroupID", referencedColumnName="id")
     */
    private ?string $GroupID;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumn(name="UserID", referencedColumnName="id")
     */
    private ?int $UserID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role)
    {
        $this->role = $role;
        return $this;
    }

}