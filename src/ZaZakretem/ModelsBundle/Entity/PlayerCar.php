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

}