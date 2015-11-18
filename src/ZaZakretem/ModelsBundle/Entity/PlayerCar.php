<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="players_cars")
 */
class PlayerCar
{
    /**
     * @ORM\Column(type="integer", name="car_id")
     * @ORM\Id
     */
    private $carId;

    /**
     * @ORM\Column(type="integer", name="player_id")
     * @ORM\Id
     */
    private $playerId;

    /**
     * @ORM\Column(type="integer", name="engine_tune_part_id")
     */
    private $engineTunePartId;

    /**
     * @ORM\Column(type="integer", name="mass_reduction_part_id")
     */
    private $massReductionPartId;

    /**
     * @ORM\Column(type="integer", name="suspension_part_id")
     */
    private $suspensionPartId;

    /**
     * @ORM\Column(type="integer", name="brakes_part_id")
     */
    private $brakesPartId;

    /**
     * @ORM\Column(type="integer", name="drivetrain_part_id")
     */
    private $drivetrainPartId;

    /**
     * @ORM\Column(type="integer", name="aspiration_part_id")
     */
    private $aspirationPartId;

    /**
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="cars")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="engine_tune_part_id", referencedColumnName="id")
     */
    private $engineTune;

    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="mass_reduction_part_id", referencedColumnName="id")
     */
    private $massReduction;

    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="suspension_part_id", referencedColumnName="id")
     */
    private $suspension;

    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="brakes_part_id", referencedColumnName="id")
     */
    private $brakes;

    /**
     * @ORM\ManyToOne(targetEntity="DrivetrainPart")
     * @ORM\JoinColumn(name="drivetrain_part_id", referencedColumnName="drivetrain_id")
     */
    private $drivetrain;

    /**
     * @ORM\ManyToOne(targetEntity="AspirationPart")
     * @ORM\JoinColumn(name="aspiration_part_id", referencedColumnName="aspiration_id")
     */
    private $aspiration;


    /**
     * Set carId
     *
     * @param integer $carId
     *
     * @return PlayerCar
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;

        return $this;
    }

    /**
     * Get carId
     *
     * @return integer
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Set playerId
     *
     * @param integer $playerId
     *
     * @return PlayerCar
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return integer
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set engineTunePartId
     *
     * @param integer $engineTunePartId
     *
     * @return PlayerCar
     */
    public function setEngineTunePartId($engineTunePartId)
    {
        $this->engineTunePartId = $engineTunePartId;

        return $this;
    }

    /**
     * Get engineTunePartId
     *
     * @return integer
     */
    public function getEngineTunePartId()
    {
        return $this->engineTunePartId;
    }

    /**
     * Set massReductionPartId
     *
     * @param integer $massReductionPartId
     *
     * @return PlayerCar
     */
    public function setMassReductionPartId($massReductionPartId)
    {
        $this->massReductionPartId = $massReductionPartId;

        return $this;
    }

    /**
     * Get massReductionPartId
     *
     * @return integer
     */
    public function getMassReductionPartId()
    {
        return $this->massReductionPartId;
    }

    /**
     * Set suspensionPartId
     *
     * @param integer $suspensionPartId
     *
     * @return PlayerCar
     */
    public function setSuspensionPartId($suspensionPartId)
    {
        $this->suspensionPartId = $suspensionPartId;

        return $this;
    }

    /**
     * Get suspensionPartId
     *
     * @return integer
     */
    public function getSuspensionPartId()
    {
        return $this->suspensionPartId;
    }

    /**
     * Set brakesPartId
     *
     * @param integer $brakesPartId
     *
     * @return PlayerCar
     */
    public function setBrakesPartId($brakesPartId)
    {
        $this->brakesPartId = $brakesPartId;

        return $this;
    }

    /**
     * Get brakesPartId
     *
     * @return integer
     */
    public function getBrakesPartId()
    {
        return $this->brakesPartId;
    }

    /**
     * Set drivetrainPartId
     *
     * @param integer $drivetrainPartId
     *
     * @return PlayerCar
     */
    public function setDrivetrainPartId($drivetrainPartId)
    {
        $this->drivetrainPartId = $drivetrainPartId;

        return $this;
    }

    /**
     * Get drivetrainPartId
     *
     * @return integer
     */
    public function getDrivetrainPartId()
    {
        return $this->drivetrainPartId;
    }

    /**
     * Set aspirationPartId
     *
     * @param integer $aspirationPartId
     *
     * @return PlayerCar
     */
    public function setAspirationPartId($aspirationPartId)
    {
        $this->aspirationPartId = $aspirationPartId;

        return $this;
    }

    /**
     * Get aspirationPartId
     *
     * @return integer
     */
    public function getAspirationPartId()
    {
        return $this->aspirationPartId;
    }

    /**
     * Set car
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Car $car
     *
     * @return PlayerCar
     */
    public function setCar(\ZaZakretem\ModelsBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set player
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Player $player
     *
     * @return PlayerCar
     */
    public function setPlayer(\ZaZakretem\ModelsBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set engineTune
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $engineTune
     *
     * @return PlayerCar
     */
    public function setEngineTune(\ZaZakretem\ModelsBundle\Entity\Part $engineTune = null)
    {
        $this->engineTune = $engineTune;

        return $this;
    }

    /**
     * Get engineTune
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Part
     */
    public function getEngineTune()
    {
        return $this->engineTune;
    }

    /**
     * Set massReduction
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $massReduction
     *
     * @return PlayerCar
     */
    public function setMassReduction(\ZaZakretem\ModelsBundle\Entity\Part $massReduction = null)
    {
        $this->massReduction = $massReduction;

        return $this;
    }

    /**
     * Get massReduction
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Part
     */
    public function getMassReduction()
    {
        return $this->massReduction;
    }

    /**
     * Set suspension
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $suspension
     *
     * @return PlayerCar
     */
    public function setSuspension(\ZaZakretem\ModelsBundle\Entity\Part $suspension = null)
    {
        $this->suspension = $suspension;

        return $this;
    }

    /**
     * Get suspension
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Part
     */
    public function getSuspension()
    {
        return $this->suspension;
    }

    /**
     * Set brakes
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $brakes
     *
     * @return PlayerCar
     */
    public function setBrakes(\ZaZakretem\ModelsBundle\Entity\Part $brakes = null)
    {
        $this->brakes = $brakes;

        return $this;
    }

    /**
     * Get brakes
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Part
     */
    public function getBrakes()
    {
        return $this->brakes;
    }

    /**
     * Set drivetrain
     *
     * @param \ZaZakretem\ModelsBundle\Entity\DrivetrainPart $drivetrain
     *
     * @return PlayerCar
     */
    public function setDrivetrain(\ZaZakretem\ModelsBundle\Entity\DrivetrainPart $drivetrain = null)
    {
        $this->drivetrain = $drivetrain;

        return $this;
    }

    /**
     * Get drivetrain
     *
     * @return \ZaZakretem\ModelsBundle\Entity\DrivetrainPart
     */
    public function getDrivetrain()
    {
        return $this->drivetrain;
    }

    /**
     * Set aspiration
     *
     * @param \ZaZakretem\ModelsBundle\Entity\AspirationPart $aspiration
     *
     * @return PlayerCar
     */
    public function setAspiration(\ZaZakretem\ModelsBundle\Entity\AspirationPart $aspiration = null)
    {
        $this->aspiration = $aspiration;

        return $this;
    }

    /**
     * Get aspiration
     *
     * @return \ZaZakretem\ModelsBundle\Entity\AspirationPart
     */
    public function getAspiration()
    {
        return $this->aspiration;
    }
}
