<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * Tracks
 */
class Tracks
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $startCoordinatesJson;

    /**
     * @var string
     */
    private $endCoordinatesJson;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tracks
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
     * @return Tracks
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
     * @param string $startCoordinatesJson
     *
     * @return Tracks
     */
    public function setStartCoordinatesJson($startCoordinatesJson)
    {
        $this->startCoordinatesJson = $startCoordinatesJson;

        return $this;
    }

    /**
     * Get startCoordinatesJson
     *
     * @return string
     */
    public function getStartCoordinatesJson()
    {
        return $this->startCoordinatesJson;
    }

    /**
     * Set endCoordinatesJson
     *
     * @param string $endCoordinatesJson
     *
     * @return Tracks
     */
    public function setEndCoordinatesJson($endCoordinatesJson)
    {
        $this->endCoordinatesJson = $endCoordinatesJson;

        return $this;
    }

    /**
     * Get endCoordinatesJson
     *
     * @return string
     */
    public function getEndCoordinatesJson()
    {
        return $this->endCoordinatesJson;
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
}

