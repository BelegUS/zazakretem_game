<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parts")
 */
class Part
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $horsepower_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $torque_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $mass_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $vmax_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $acceleration_change;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $handling_change;

    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $level;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", name="type_id")
     */
    private $typeId;

    /**
     * @ORM\ManyToOne(targetEntity="PartType", inversedBy="parts")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

}

