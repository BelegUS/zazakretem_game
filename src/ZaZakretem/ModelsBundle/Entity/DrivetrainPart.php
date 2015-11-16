<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="drivetrains_parts")
 */
class DrivetrainPart
{
    /**
     * @ORM\Column(type="integer", name="part_id")
     * @ORM\Id
     */
    private $partId;

    /**
     * @ORM\Column(type="integer", name="drivetrain_id")
     * @ORM\Id
     */
    private $drivetrainId;

    /**
     * @OneToOne(targetEntity="Part")
     * @JoinColumn(name="part_id", referencedColumnName="id")
     */
    protected $part;

    /**
     * @ManyToOne(targetEntity="Drivetrain", inversedBy="parts")
     * @JoinColumn(name="drivetrain_id", referencedColumnName="id")
     */
    protected $aspiration;
}

