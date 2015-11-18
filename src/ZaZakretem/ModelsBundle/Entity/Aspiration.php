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


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Aspiration
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Aspiration
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Car $car
     *
     * @return Aspiration
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
     * @param \ZaZakretem\ModelsBundle\Entity\AspirationPart $part
     *
     * @return Aspiration
     */
    public function addPart(\ZaZakretem\ModelsBundle\Entity\AspirationPart $part)
    {
        $this->parts[] = $part;

        return $this;
    }

    /**
     * Remove part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\AspirationPart $part
     */
    public function removePart(\ZaZakretem\ModelsBundle\Entity\AspirationPart $part)
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
