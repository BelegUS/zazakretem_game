<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-21
 * Time: 15:28
 */

namespace ZaZakretem\ModelsBundle\Entity\NonPersistent;


use ZaZakretem\ModelsBundle\Entity\PlayerCar;
use ZaZakretem\ModelsBundle\Interfaces\ChallengeableInterface;

class AiOpponent implements ChallengeableInterface
{
    /**
     * @var PlayerCar
     */
    private $car;

    /**
     * @var int Smartness
     */
    private $smartness;

    /**
     * @var int Composure
     */
    private $composure;

    /**
     * @var int Reflex
     */
    private $reflex;

    /**
     * @var int Courage
     */
    private $courage;


    /**
     * AiOpponent constructor.
     * @param PlayerCar $car
     */
    public function __construct($car)
    {
        $this->car = $car;
    }

    public function getActiveCar()
    {
        return $this->car;
    }

    /**
     * @return int
     */
    public function getSmartness()
    {
        return $this->smartness;
    }

    /**
     * @param int $smartness
     */
    public function setSmartness($smartness)
    {
        $this->smartness = $smartness;
    }

    /**
     * @return int
     */
    public function getComposure()
    {
        return $this->composure;
    }

    /**
     * @param int $composure
     */
    public function setComposure($composure)
    {
        $this->composure = $composure;
    }

    /**
     * @return int
     */
    public function getReflex()
    {
        return $this->reflex;
    }

    /**
     * @param int $reflex
     */
    public function setReflex($reflex)
    {
        $this->reflex = $reflex;
    }

    /**
     * @return int
     */
    public function getCourage()
    {
        return $this->courage;
    }

    /**
     * @param int $courage
     */
    public function setCourage($courage)
    {
        $this->courage = $courage;
    }



}