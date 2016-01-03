<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ZaZakretem\ModelsBundle\Interfaces\SubTypeInterface;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"aspiration" = "Aspiration", "drivetrain" = "Drivetrain"})
 */
abstract class Layout implements SubTypeInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="TrackPartModificator", mappedBy="expectedLayout")
     */
    protected $trackModificators;



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
     * @return Layout
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
     * @return Layout
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
     * Set type
     *
     * @param \ZaZakretem\ModelsBundle\Entity\PartType $type
     *
     * @return Layout
     */
    public function setType(\ZaZakretem\ModelsBundle\Entity\PartType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \ZaZakretem\ModelsBundle\Entity\PartType
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trackModificators = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add trackModificator
     *
     * @param \ZaZakretem\ModelsBundle\Entity\TrackPartModificator $trackModificator
     *
     * @return Layout
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
