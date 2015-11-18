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

    /**
     * Set partId
     *
     * @param integer $partId
     *
     * @return DrivetrainPart
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;

        return $this;
    }

    /**
     * Get partId
     *
     * @return integer
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * Set drivetrainId
     *
     * @param integer $drivetrainId
     *
     * @return DrivetrainPart
     */
    public function setDrivetrainId($drivetrainId)
    {
        $this->drivetrainId = $drivetrainId;

        return $this;
    }

    /**
     * Get drivetrainId
     *
     * @return integer
     */
    public function getDrivetrainId()
    {
        return $this->drivetrainId;
    }

    /**
     * Set part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $part
     *
     * @return DrivetrainPart
     */
    public function setPart(\ZaZakretem\ModelsBundle\Entity\Part $part = null)
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
     * Set aspiration
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Drivetrain $aspiration
     *
     * @return DrivetrainPart
     */
    public function setAspiration(\ZaZakretem\ModelsBundle\Entity\Drivetrain $aspiration = null)
    {
        $this->aspiration = $aspiration;

        return $this;
    }

    /**
     * Get aspiration
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Drivetrain
     */
    public function getAspiration()
    {
        return $this->aspiration;
    }
}
