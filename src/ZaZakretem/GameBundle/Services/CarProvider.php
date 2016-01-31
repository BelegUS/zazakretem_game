<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Car;
use ZaZakretem\ModelsBundle\Entity\PlayerCar;
use ZaZakretem\ModelsBundle\Enums\PartLevel;
use ZaZakretem\ModelsBundle\Enums\PartTypeName;

class CarProvider
{
    private $em;
    private $partProvider;

    public function __construct(EntityManager $em, PartProvider $partProvider)
    {
        $this->em = $em;
        $this->partProvider = $partProvider;
    }

    /**
     * @param Car $car
     * @return PlayerCar
     */
    public function provideStockCar(Car $car)
    {
        $partProvider = $this->partProvider;

        $stockCar = new PlayerCar();
        $stockCar->setCar($car);
        $stockCar->setAspiration($partProvider->getPart(PartTypeName::ASPIRATION, PartLevel::STOCK));
        $stockCar->setBrakes($partProvider->getPart(PartTypeName::BRAKES, PartLevel::STOCK));
        $stockCar->setDrivetrain($partProvider->getPart(PartTypeName::DRIVETRAIN, PartLevel::STOCK));
        $stockCar->setEngineTune($partProvider->getPart(PartTypeName::ENGINE_TUNE, PartLevel::STOCK));
        $stockCar->setMassReduction($partProvider->getPart(PartTypeName::MASS_REDUCTION, PartLevel::STOCK));
        $stockCar->setSuspension($partProvider->getPart(PartTypeName::SUSPENSION, PartLevel::STOCK));

        return $stockCar;
    }
}