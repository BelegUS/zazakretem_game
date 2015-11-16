<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * Parts
 */
class Parts
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $horsepower%;

    /**
     * @var integer
     */
    private $torque%;

    /**
     * @var integer
     */
    private $mass%;

    /**
     * @var integer
     */
    private $vmax%;

    /**
     * @var integer
     */
    private $acceleration%;

    /**
     * @var integer
     */
    private $handling%;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Parts
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
     * Set horsepower%
     *
     * @param integer $horsepower%
     *
     * @return Parts
     */
    public function setHorsepower%($horsepower%)
    {
        $this->horsepower% = $horsepower%;

        return $this;
    }

    /**
     * Get horsepower%
     *
     * @return integer
     */
    public function getHorsepower%()
    {
        return $this->horsepower%;
    }

    /**
     * Set torque%
     *
     * @param integer $torque%
     *
     * @return Parts
     */
    public function setTorque%($torque%)
    {
        $this->torque% = $torque%;

        return $this;
    }

    /**
     * Get torque%
     *
     * @return integer
     */
    public function getTorque%()
    {
        return $this->torque%;
    }

    /**
     * Set mass%
     *
     * @param integer $mass%
     *
     * @return Parts
     */
    public function setMass%($mass%)
    {
        $this->mass% = $mass%;

        return $this;
    }

    /**
     * Get mass%
     *
     * @return integer
     */
    public function getMass%()
    {
        return $this->mass%;
    }

    /**
     * Set vmax%
     *
     * @param integer $vmax%
     *
     * @return Parts
     */
    public function setVmax%($vmax%)
    {
        $this->vmax% = $vmax%;

        return $this;
    }

    /**
     * Get vmax%
     *
     * @return integer
     */
    public function getVmax%()
    {
        return $this->vmax%;
    }

    /**
     * Set acceleration%
     *
     * @param integer $acceleration%
     *
     * @return Parts
     */
    public function setAcceleration%($acceleration%)
    {
        $this->acceleration% = $acceleration%;

        return $this;
    }

    /**
     * Get acceleration%
     *
     * @return integer
     */
    public function getAcceleration%()
    {
        return $this->acceleration%;
    }

    /**
     * Set handling%
     *
     * @param integer $handling%
     *
     * @return Parts
     */
    public function setHandling%($handling%)
    {
        $this->handling% = $handling%;

        return $this;
    }

    /**
     * Get handling%
     *
     * @return integer
     */
    public function getHandling%()
    {
        return $this->handling%;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Parts
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
     * @return Parts
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
     * @return Parts
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
     * @param integer $type
     *
     * @return Parts
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
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

