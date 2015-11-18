<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="aspirations")
 */
class Aspiration
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Car", mappedBy="aspiration")
     */
    private $cars;

    /**
     * @ORM\OneToMany(targetEntity="AspirationPart", mappedBy="aspiration")
     */
    private $parts;

    public function __construct() {
        $this->cars = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

}

