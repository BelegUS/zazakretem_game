<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="tracks")
 */
class Track
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="json_array")
     */
    private $startCoordinatesJson;

    /**
     * @ORM\Column(type="json_array")
     */
    private $endCoordinatesJson;

    /**
     * @OneToMany(targetEntity="TrackPartModificator", mappedBy="track")
     */
    private $modificators;

}

