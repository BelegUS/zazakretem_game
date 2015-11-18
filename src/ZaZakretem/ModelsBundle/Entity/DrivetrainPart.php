<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\OneToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

    /**
     * @ORM\ManyToOne(targetEntity="Drivetrain", inversedBy="parts")
     * @ORM\JoinColumn(name="drivetrain_id", referencedColumnName="id")
     */
    private $aspiration;
}

