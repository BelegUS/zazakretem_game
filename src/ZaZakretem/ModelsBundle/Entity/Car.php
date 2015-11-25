<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cars")
 */
class Car
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
    private $model;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $horsepower;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $torque;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $mass;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $vmax;

    /**
     * @ORM\Column(type="float", length=4)
     */
    private $acceleration;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $handling;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="cars")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     */
    protected $brand;

    /**
     * @ORM\ManyToOne(targetEntity="Drivetrain", inversedBy="cars")
     * @ORM\JoinColumn(name="drivetrain_id", referencedColumnName="id")
     */
    protected $drivetrain;

    /**
     * @ORM\ManyToOne(targetEntity="Aspiration", inversedBy="cars")
     * @ORM\JoinColumn(name="aspiration_id", referencedColumnName="id")
     */
    protected $aspiration;


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
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set horsepower
     *
     * @param integer $horsepower
     *
     * @return Car
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;

        return $this;
    }

    /**
     * Get horsepower
     *
     * @return integer
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * Set torque
     *
     * @param integer $torque
     *
     * @return Car
     */
    public function setTorque($torque)
    {
        $this->torque = $torque;

        return $this;
    }

    /**
     * Get torque
     *
     * @return integer
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * Set mass
     *
     * @param integer $mass
     *
     * @return Car
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get mass
     *
     * @return integer
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Set vmax
     *
     * @param integer $vmax
     *
     * @return Car
     */
    public function setVmax($vmax)
    {
        $this->vmax = $vmax;

        return $this;
    }

    /**
     * Get vmax
     *
     * @return integer
     */
    public function getVmax()
    {
        return $this->vmax;
    }

    /**
     * Set acceleration
     *
     * @param float $acceleration
     *
     * @return Car
     */
    public function setAcceleration($acceleration)
    {
        $this->acceleration = $acceleration;

        return $this;
    }

    /**
     * Get acceleration
     *
     * @return float
     */
    public function getAcceleration()
    {
        return $this->acceleration;
    }

    /**
     * Set handling
     *
     * @param integer $handling
     *
     * @return Car
     */
    public function setHandling($handling)
    {
        $this->handling = $handling;

        return $this;
    }

    /**
     * Get handling
     *
     * @return integer
     */
    public function getHandling()
    {
        return $this->handling;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Car
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
     * Set brand
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Brand $brand
     *
     * @return Car
     */
    public function setBrand(\ZaZakretem\ModelsBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set drivetrain
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Drivetrain $drivetrain
     *
     * @return Car
     */
    public function setDrivetrain(\ZaZakretem\ModelsBundle\Entity\Drivetrain $drivetrain = null)
    {
        $this->drivetrain = $drivetrain;

        return $this;
    }

    /**
     * Get drivetrain
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Drivetrain
     */
    public function getDrivetrain()
    {
        return $this->drivetrain;
    }

    /**
     * Set aspiration
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration
     *
     * @return Car
     */
    public function setAspiration(\ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration = null)
    {
        $this->aspiration = $aspiration;

        return $this;
    }

    /**
     * Get aspiration
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Aspiration
     */
    public function getAspiration()
    {
        return $this->aspiration;
    }
}
