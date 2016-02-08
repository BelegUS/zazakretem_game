<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Car;
use ZaZakretem\ModelsBundle\Entity\PlayerCar;
use ZaZakretem\ModelsBundle\Enums\PartLevels;
use ZaZakretem\ModelsBundle\Enums\PartTypeNames;

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
        $stockCar->setAspirationPart($partProvider->getPart(PartTypeNames::ASPIRATION, PartLevels::STOCK));
        $stockCar->setBrakes($partProvider->getPart(PartTypeNames::BRAKES, PartLevels::STOCK));
        $stockCar->setDrivetrainPart($partProvider->getPart(PartTypeNames::DRIVETRAIN, PartLevels::STOCK));
        $stockCar->setEngineTune($partProvider->getPart(PartTypeNames::ENGINE_TUNE, PartLevels::STOCK));
        $stockCar->setMassReduction($partProvider->getPart(PartTypeNames::MASS_REDUCTION, PartLevels::STOCK));
        $stockCar->setSuspension($partProvider->getPart(PartTypeNames::SUSPENSION, PartLevels::STOCK));

        return $stockCar;
    }
}