<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="User", inversedBy="player")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $money;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $smartness;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $composure;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $reflex;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $courage;

    /**
     * @ORM\Column(type="integer")
     */
    private $xp;

    /**
     * @ORM\OneToMany(targetEntity="PlayerCar", mappedBy="player")
     */
    private $cars;

    public function __construct() {
        $this->cars = new ArrayCollection();
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Player
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set smartness
     *
     * @param integer $smartness
     *
     * @return Player
     */
    public function setSmartness($smartness)
    {
        $this->smartness = $smartness;

        return $this;
    }

    /**
     * Get smartness
     *
     * @return integer
     */
    public function getSmartness()
    {
        return $this->smartness;
    }

    /**
     * Set composure
     *
     * @param integer $composure
     *
     * @return Player
     */
    public function setComposure($composure)
    {
        $this->composure = $composure;

        return $this;
    }

    /**
     * Get composure
     *
     * @return integer
     */
    public function getComposure()
    {
        return $this->composure;
    }

    /**
     * Set reflex
     *
     * @param integer $reflex
     *
     * @return Player
     */
    public function setReflex($reflex)
    {
        $this->reflex = $reflex;

        return $this;
    }

    /**
     * Get reflex
     *
     * @return integer
     */
    public function getReflex()
    {
        return $this->reflex;
    }

    /**
     * Set courage
     *
     * @param integer $courage
     *
     * @return Player
     */
    public function setCourage($courage)
    {
        $this->courage = $courage;

        return $this;
    }

    /**
     * Get courage
     *
     * @return integer
     */
    public function getCourage()
    {
        return $this->courage;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return Player
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set user
     *
     * @param \ZaZakretem\ModelsBundle\Entity\User $user
     *
     * @return Player
     */
    public function setUser(\ZaZakretem\ModelsBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ZaZakretem\ModelsBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\PlayerCar $car
     *
     * @return Player
     */
    public function addCar(\ZaZakretem\ModelsBundle\Entity\PlayerCar $car)
    {
        $this->cars[] = $car;

        return $this;
    }

    /**
     * Remove car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\PlayerCar $car
     */
    public function removeCar(\ZaZakretem\ModelsBundle\Entity\PlayerCar $car)
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
}
