<?php

namespace ZaZakretem\ModelsBundle\Entity;

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
     * @ManyToOne(targetEntity="Car")
     * @JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;

    /**
     * @ManyToOne(targetEntity="Player", inversedBy="cars")
     * @JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;

    /**
     * @ManyToOne(targetEntity="Part")
     * @JoinColumn(name="engine_tune_part_id", referencedColumnName="id")
     */
    private $engineTune;

    /**
     * @ManyToOne(targetEntity="Part")
     * @JoinColumn(name="mass_reduction_part_id", referencedColumnName="id")
     */
    private $massReduction;

    /**
     * @ManyToOne(targetEntity="Part")
     * @JoinColumn(name="suspension_part_id", referencedColumnName="id")
     */
    private $suspension;

    /**
     * @ManyToOne(targetEntity="Part")
     * @JoinColumn(name="brakes_part_id", referencedColumnName="id")
     */
    private $brakes;

    /**
     * @ManyToOne(targetEntity="DrivetrainPart")
     * @JoinColumn(name="drivetrain_part_id", referencedColumnName="drivetrain_id")
     */
    private $drivetrain;

    /**
     * @ManyToOne(targetEntity="AspirationPart")
     * @JoinColumn(name="aspiration_part_id", referencedColumnName="aspiration_id")
     */
    private $aspiration;

}