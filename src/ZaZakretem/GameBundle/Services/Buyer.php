<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Car;
use ZaZakretem\ModelsBundle\Entity\Player;

class Buyer
{
    protected $em;
    protected $carProvider;

    public function __construct(EntityManager $em, CarProvider $carProvider) {
        $this->em = $em;
        $this->carProvider = $carProvider;
    }

    public function buyNewCar(Player $player, Car $car)
    {
        $player->spendMoney($car->getPrice());
        $playerCar = $this->carProvider->provideStockCar($car);
        $playerCar->setPlayer($player);

        $this->em->persist($player);
        $this->em->persist($playerCar);
        $this->em->flush();
    }
}