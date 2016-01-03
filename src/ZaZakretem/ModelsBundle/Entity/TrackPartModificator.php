<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tracks_parts_modificators")
 */
class TrackPartModificator
{
    //TODO: Let's have column which tells value that is expected
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @ORM\ManyToOne(targetEntity="Layout", inversedBy="trackModificators")
     * @ORM\JoinColumn(name="expected_layout_id", referencedColumnName="id")
     */
    private $expectedLayout;

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

    /**
     * Set expectedLayout
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Layout $expectedLayout
     *
     * @return TrackPartModificator
     */
    public function setExpectedLayout(\ZaZakretem\ModelsBundle\Entity\Layout $expectedLayout = null)
    {
        $this->expectedLayout = $expectedLayout;

        return $this;
    }

    /**
     * Get expectedLayout
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Layout
     */
    public function getExpectedLayout()
    {
        return $this->expectedLayout;
    }
}
