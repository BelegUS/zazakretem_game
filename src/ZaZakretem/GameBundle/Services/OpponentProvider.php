<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-20
 * Time: 17:11
 */

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Car;
use ZaZakretem\ModelsBundle\Entity\NonPersistent\AiOpponent;
use ZaZakretem\ModelsBundle\Entity\PlayerCar;

class OpponentProvider
{
    private $em;
    private $maxOpponentsCount;

    public function __construct(EntityManager $em, $max_opponents_count)
    {
        $this->em = $em;
        $this->maxOpponentsCount = $max_opponents_count;
    }

    public function getOpponents($track, $player)
    {
        $opponents = array();
        for($i = 0; $i<$this->maxOpponentsCount; $i++) {
            $opponents[] = new AiOpponent($this->getRandomPlayerCar());
        }
        return $opponents;
    }

    private function getRandomPlayerCar()
    {
        $playerCar = new PlayerCar();
        return $playerCar->setCar($this->getRandomCar());
    }

    private function getRandomCar()
    {
        $maxCarId = $this->em->getRepository('ZaZakretemModelsBundle:Car')->createQueryBuilder('c')->select('COUNT(c)')->getQuery()->getSingleScalarResult();
        $randomCarId = rand(1, $maxCarId);

        return $this->em->getRepository('ZaZakretemModelsBundle:Car')->find($randomCarId);

    }
}