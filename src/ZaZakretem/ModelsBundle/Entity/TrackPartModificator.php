<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tracks_parts_modificators")
 */
class TrackPartModificator
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="part_type_id")
     */
    private $partTypeId;

    /**
     * @ORM\Column(type="integer", name="track_id")
     */
    private $trackId;

    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $modificator;

    /**
     * @ORM\ManyToOne(targetEntity="PartType")
     * @ORM\JoinColumn(name="part_type_id", referencedColumnName="id")
     */
    private $partType;

    /**
     * @ORM\ManyToOne(targetEntity="Track", inversedBy="modificators")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id")
     */
    private $track;


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
     * Set partTypeId
     *
     * @param integer $partTypeId
     *
     * @return TrackPartModificator
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
     * @return TrackPartModificator
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
     * @param integer $modificator
     *
     * @return TrackPartModificator
     */
    public function setModificator($modificator)
    {
        $this->modificator = $modificator;

        return $this;
    }

    /**
     * Get modificator
     *
     * @return integer
     */
    public function getModificator()
    {
        return $this->modificator;
    }

    /**
     * Set partType
     *
     * @param \ZaZakretem\ModelsBundle\Entity\PartType $partType
     *
     * @return TrackPartModificator
     */
    public function setPartType(\ZaZakretem\ModelsBundle\Entity\PartType $partType = null)
    {
        $this->partType = $partType;

        return $this;
    }

    /**
     * Get partType
     *
     * @return \ZaZakretem\ModelsBundle\Entity\PartType
     */
    public function getPartType()
    {
        return $this->partType;
    }

    /**
     * Set track
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Track $track
     *
     * @return TrackPartModificator
     */
    public function setTrack(\ZaZakretem\ModelsBundle\Entity\Track $track = null)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Track
     */
    public function getTrack()
    {
        return $this->track;
    }
}
