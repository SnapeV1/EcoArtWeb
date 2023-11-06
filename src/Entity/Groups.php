<?php

namespace App\Entity;

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
    private $size;

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

}
