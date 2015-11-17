<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="parts_types")
 */
class PartType
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @OneToMany(targetEntity="Part", mappedBy="type")
     */
    protected $parts;

    public function __construct() {
        $this->parts = new ArrayCollection();
    }
}

