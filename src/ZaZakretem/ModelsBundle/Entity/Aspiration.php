<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use ZaZakretem\ModelsBundle\Interfaces\SubTypeInterface;

/**
 * @ORM\Entity
 */
class Aspiration extends Layout
{
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

    /**
     * Add trackModificator
     *
     * @param \ZaZakretem\ModelsBundle\Entity\TrackPartModificator $trackModificator
     *
     * @return Aspiration
     */
    public function addTrackModificator(\ZaZakretem\ModelsBundle\Entity\TrackPartModificator $trackModificator)
    {
        $this->trackModificators[] = $trackModificator;

        return $this;
    }

    /**
     * Remove trackModificator
     *
     * @param \ZaZakretem\ModelsBundle\Entity\TrackPartModificator $trackModificator
     */
    public function removeTrackModificator(\ZaZakretem\ModelsBundle\Entity\TrackPartModificator $trackModificator)
    {
        $this->trackModificators->removeElement($trackModificator);
    }

    /**
     * Get trackModificators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrackModificators()
    {
        return $this->trackModificators;
    }
}
