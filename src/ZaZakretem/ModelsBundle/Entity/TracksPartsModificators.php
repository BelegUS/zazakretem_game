<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * TracksPartsModificators
 */
class TracksPartsModificators
{
    /**
     * @var integer
     */
    private $partTypeId;

    /**
     * @var integer
     */
    private $trackId;

    /**
     * @var float
     */
    private $modificator;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set partTypeId
     *
     * @param integer $partTypeId
     *
     * @return TracksPartsModificators
     */
    public function setPartTypeId($partTypeId)
    {
        $this->partTypeId = $partTypeId;

        return $this;
    }

    /**
     * Get partTypeId
     *
     * @return integer
     */
    public function getPartTypeId()
    {
        return $this->partTypeId;
    }

    /**
     * Set trackId
     *
     * @param integer $trackId
     *
     * @return TracksPartsModificators
     */
    public function setTrackId($trackId)
    {
        $this->trackId = $trackId;

        return $this;
    }

    /**
     * Get trackId
     *
     * @return integer
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * Set modificator
     *
     * @param float $modificator
     *
     * @return TracksPartsModificators
     */
    public function setModificator($modificator)
    {
        $this->modificator = $modificator;

        return $this;
    }

    /**
     * Get modificator
     *
     * @return float
     */
    public function getModificator()
    {
        return $this->modificator;
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

