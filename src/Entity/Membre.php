<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="membre")
 */
class Membre
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumn(name="UserID", referencedColumnName="id")
     */
    private ?Utilisateur $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumn(name="GroupID", referencedColumnName="id")
     */
    private ?Groups $group;

    /**
     * @ORM\Column(type="string", length=50, name="Role")
     */
    private ?string $role;

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getGroup(): ?Groups
    {
        return $this->group;
    }

    public function setGroup(?Groups $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }
}
