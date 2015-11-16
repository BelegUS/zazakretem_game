<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="cars")
 */
class Car
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="brand_id")
     */
    private $brandId;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $model;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $horsepower;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $torque;

    /**
     * @ORM\Column(type="integer", length=4)
     */
    private $mass;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $vmax;

    /**
     * @ORM\Column(type="float", length=4)
     */
    private $acceleration;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $handling;

    /**
     * @ORM\Column(type="integer", name="drivetrain_id")
     */
    private $drivetrainId;

    /**
     * @ORM\Column(type="integer", name="aspiration_id")
     */
    private $aspirationId;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $price;

    /**
     * @ManyToOne(targetEntity="Brand", inversedBy="cars")
     * @JoinColumn(name="brand_id", referencedColumnName="id")
     */
    protected $brand;

    /**
     * @ManyToOne(targetEntity="Drivetrain", inversedBy="cars")
     * @JoinColumn(name="drivetrain_id", referencedColumnName="id")
     */
    protected $drivetrain;

    /**
     * @ManyToOne(targetEntity="Aspiration", inversedBy="cars")
     * @JoinColumn(name="aspiration_id", referencedColumnName="id")
     */
    protected $aspiration;


}

