<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * Players
 */
class Players
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $registrationDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $money;

    /**
     * @var integer
     */
    private $smartness;

    /**
     * @var integer
     */
    private $composure;

    /**
     * @var integer
     */
    private $reflex;

    /**
     * @var integer
     */
    private $courage;

    /**
     * @var integer
     */
    private $xp;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $car;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->car = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Players
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
     * Set password
     *
     * @param string $password
     *
     * @return Players
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return Players
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Players
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Players
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
     * @return Players
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
     * @return Players
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
     * @return Players
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
     * @return Players
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
     * @return Players
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Cars $car
     *
     * @return Players
     */
    public function addCar(\ZaZakretem\ModelsBundle\Entity\Car $car)
    {
        $this->car[] = $car;

        return $this;
    }

    /**
     * Remove car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Cars $car
     */
    public function removeCar(\ZaZakretem\ModelsBundle\Entity\Car $car)
    {
        $this->car->removeElement($car);
    }

    /**
     * Get car
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCar()
    {
        return $this->car;
    }
}

