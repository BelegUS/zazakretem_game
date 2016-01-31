<?php

namespace ZaZakretem\ModelsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ZaZakretem\GameBundle\Exceptions\NotEnoughMoneyException;
use ZaZakretem\ModelsBundle\Interfaces\HasPriceInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player extends BaseUser
{
    const BASE_MONEY = 15000;
    const BASE_SMARTNESS = 1;
    const BASE_COMPOSURE = 1;
    const BASE_REFLEX = 1;
    const BASE_COURAGE = 1;
    const BASE_XP = 0;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $registrationDate;

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
        parent::__construct();
        $this->cars = new ArrayCollection();

        $this->setMoney(self::BASE_MONEY);
        $this->setSmartness(self::BASE_SMARTNESS);
        $this->setComposure(self::BASE_COMPOSURE);
        $this->setReflex(self::BASE_REFLEX);
        $this->setCourage(self::BASE_COURAGE);
        $this->setXp(self::BASE_XP);
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

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return Player
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Checks if Player can afford item
     * @param HasPriceInterface $item
     * @return bool
     */
    public function canAfford(HasPriceInterface $item)
    {
        $playerMoney = $this->getMoney();
        $itemPrice = $item->getPrice();
        if($playerMoney >= $itemPrice) {
            return true;
        }
        return false;
    }

    public function spendMoney($price)
    {
        $currentMoneyValue = $this->getMoney();
        if($price > $currentMoneyValue) {
            throw new NotEnoughMoneyException;
        }
        $newMoneyValue = $currentMoneyValue - $price;
        $this->setMoney($newMoneyValue);
    }
}
