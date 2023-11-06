<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempmail
 *
 * @ORM\Table(name="tempmail")
 * @ORM\Entity
 */
class Tempmail
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
     * @ORM\Column(name="Email", type="string", length=30, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="idGroup", type="integer", nullable=false)
     */
    private $idgroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getIdgroup(): ?int
    {
        return $this->idgroup;
    }

    public function setIdgroup(int $idgroup): static
    {
        $this->idgroup = $idgroup;

        return $this;
    }


}
