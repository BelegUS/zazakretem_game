<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="drivetrains")
 */
class Drivetrain
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
     * @OneToMany(targetEntity="Car", mappedBy="drivetrain")
     */
    private $cars;

    /**
     * @OneToMany(targetEntity="DrivetrainPart", mappedBy="drivetrain")
     */
    private $parts;

    public function __construct() {
        $this->cars = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

}

