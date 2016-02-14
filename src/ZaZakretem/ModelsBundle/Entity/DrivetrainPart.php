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
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

    /**
     * @ORM\ManyToOne(targetEntity="Drivetrain", inversedBy="parts")
     * @ORM\JoinColumn(name="drivetrain_id", referencedColumnName="id")
     */
    private $drivetrain;


    /**
     * Set part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $part
     *
     * @return DrivetrainPart
     */
    public function setPart(\ZaZakretem\ModelsBundle\Entity\Part $part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Part
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set drivetrain
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Drivetrain $drivetrain
     *
     * @return DrivetrainPart
     */
    public function setDrivetrain(\ZaZakretem\ModelsBundle\Entity\Drivetrain $drivetrain)
    {
        $this->drivetrain = $drivetrain;

        return $this;
    }

    /**
     * Get drivetrain
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Drivetrain
     */
    public function getDrivetrain()
    {
        return $this->drivetrain;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}
