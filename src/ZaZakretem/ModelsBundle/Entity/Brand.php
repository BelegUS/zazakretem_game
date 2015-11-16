<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="brands")
 */
class Brand
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
     * @OneToMany(targetEntity="Car", mappedBy="brand")
     */
    protected $cars;

    public function __construct() {
        $this->cars = new ArrayCollection();
    }
}

