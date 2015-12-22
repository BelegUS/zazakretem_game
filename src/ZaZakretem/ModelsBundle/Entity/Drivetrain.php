<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Drivetrain extends Layout
{
    /**
     * @ORM\OneToMany(targetEntity="Car", mappedBy="drivetrain")
     */
    private $cars;

    /**
     * @ORM\OneToMany(targetEntity="DrivetrainPart", mappedBy="drivetrain")
     */
    private $parts;

    public function __construct() {
        $this->cars = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

    /**
     * Add car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Car $car
     *
     * @return Drivetrain
     */
    public function addCar(\ZaZakretem\ModelsBundle\Entity\Car $car)
    {
        $this->cars[] = $car;

        return $this;
    }

    /**
     * Remove car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Car $car
     */
    public function removeCar(\ZaZakretem\ModelsBundle\Entity\Car $car)
    {
        $this->cars->removeElement($car);
    }

    /**
     * Get cars
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCars()
    {
        return $this->cars;
    }

    /**
     * Add part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\DrivetrainPart $part
     *
     * @return Drivetrain
     */
    public function addPart(\ZaZakretem\ModelsBundle\Entity\DrivetrainPart $part)
    {
        $this->parts[] = $part;

        return $this;
    }

    /**
     * Remove part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\DrivetrainPart $part
     */
    public function removePart(\ZaZakretem\ModelsBundle\Entity\DrivetrainPart $part)
    {
        $this->parts->removeElement($part);
    }

    /**
     * Get parts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParts()
    {
        return $this->parts;
    }
}
