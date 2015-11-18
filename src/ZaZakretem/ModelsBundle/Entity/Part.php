<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parts")
 */
class Part
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
     * @ORM\Column(type="integer", length=3)
     */
    private $horsepower_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $torque_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $mass_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $vmax_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $acceleration_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $handling_change;

    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $level;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", name="type_id")
     */
    private $typeId;

    /**
     * @ORM\ManyToOne(targetEntity="PartType", inversedBy="parts")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;


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
     * @return Part
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
     * Set horsepowerChange
     *
     * @param integer $horsepowerChange
     *
     * @return Part
     */
    public function setHorsepowerChange($horsepowerChange)
    {
        $this->horsepower_change = $horsepowerChange;

        return $this;
    }

    /**
     * Get horsepowerChange
     *
     * @return integer
     */
    public function getHorsepowerChange()
    {
        return $this->horsepower_change;
    }

    /**
     * Set torqueChange
     *
     * @param integer $torqueChange
     *
     * @return Part
     */
    public function setTorqueChange($torqueChange)
    {
        $this->torque_change = $torqueChange;

        return $this;
    }

    /**
     * Get torqueChange
     *
     * @return integer
     */
    public function getTorqueChange()
    {
        return $this->torque_change;
    }

    /**
     * Set massChange
     *
     * @param integer $massChange
     *
     * @return Part
     */
    public function setMassChange($massChange)
    {
        $this->mass_change = $massChange;

        return $this;
    }

    /**
     * Get massChange
     *
     * @return integer
     */
    public function getMassChange()
    {
        return $this->mass_change;
    }

    /**
     * Set vmaxChange
     *
     * @param integer $vmaxChange
     *
     * @return Part
     */
    public function setVmaxChange($vmaxChange)
    {
        $this->vmax_change = $vmaxChange;

        return $this;
    }

    /**
     * Get vmaxChange
     *
     * @return integer
     */
    public function getVmaxChange()
    {
        return $this->vmax_change;
    }

    /**
     * Set accelerationChange
     *
     * @param integer $accelerationChange
     *
     * @return Part
     */
    public function setAccelerationChange($accelerationChange)
    {
        $this->acceleration_change = $accelerationChange;

        return $this;
    }

    /**
     * Get accelerationChange
     *
     * @return integer
     */
    public function getAccelerationChange()
    {
        return $this->acceleration_change;
    }

    /**
     * Set handlingChange
     *
     * @param integer $handlingChange
     *
     * @return Part
     */
    public function setHandlingChange($handlingChange)
    {
        $this->handling_change = $handlingChange;

        return $this;
    }

    /**
     * Get handlingChange
     *
     * @return integer
     */
    public function getHandlingChange()
    {
        return $this->handling_change;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Part
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Part
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Part
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
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Part
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set type
     *
     * @param \ZaZakretem\ModelsBundle\Entity\PartType $type
     *
     * @return Part
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
}
