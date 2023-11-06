<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
 /**
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
      /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
