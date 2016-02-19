<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tracks")
 */
class Track
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="json_array")
     */
    private $startCoordinatesJson;

    /**
     * @ORM\Column(type="json_array")
     */
    private $endCoordinatesJson;

    /**
     * @ORM\OneToMany(targetEntity="TrackPartModificator", mappedBy="track")
     */
    private $modificators;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modificators = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Track
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
     * @return Track
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
     * Set startCoordinatesJson
     *
     * @param array $startCoordinatesJson
     *
     * @return Track
     */
    public function setStartCoordinatesJson($startCoordinatesJson)
    {
        $this->startCoordinatesJson = $startCoordinatesJson;

        return $this;
    }

    /**
     * Get startCoordinatesJson
     *
     * @return array
     */
    public function getStartCoordinatesJson()
    {
        return $this->startCoordinatesJson;
    }

    /**
     * Set endCoordinatesJson
     *
     * @param array $endCoordinatesJson
     *
     * @return Track
     */
    public function setEndCoordinatesJson($endCoordinatesJson)
    {
        $this->endCoordinatesJson = $endCoordinatesJson;

        return $this;
    }

    /**
     * Get endCoordinatesJson
     *
     * @return array
     */
    public function getEndCoordinatesJson()
    {
        return $this->endCoordinatesJson;
    }

    /**
     * Add modificator
     *
     * @param \ZaZakretem\ModelsBundle\Entity\TrackPartModificator $modificator
     *
     * @return Track
     */
    public function addModificator(\ZaZakretem\ModelsBundle\Entity\TrackPartModificator $modificator)
    {
        $this->modificators[] = $modificator;

        return $this;
    }

    /**
     * Remove modificator
     *
     * @param \ZaZakretem\ModelsBundle\Entity\TrackPartModificator $modificator
     */
    public function removeModificator(\ZaZakretem\ModelsBundle\Entity\TrackPartModificator $modificator)
    {
        $this->modificators->removeElement($modificator);
    }

    /**
     * Get modificators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModificators()
    {
        return $this->modificators;
    }

    public function getStartLatitude()
    {
        $startCoordinates = json_decode($this->getStartCoordinatesJson());
        return $startCoordinates->lat;
    }

    public function getStartLongitude()
    {
        $startCoordinates = json_decode($this->getStartCoordinatesJson());
        return $startCoordinates->lon;
    }

    public function getEndLatitude()
    {
        $endCoordinates = json_decode($this->getEndCoordinatesJson());
        return $endCoordinates->lat;
    }

    public function getEndLongitude()
    {
        $endCoordinates = json_decode($this->getEndCoordinatesJson());
        return $endCoordinates->lon;
    }


}
