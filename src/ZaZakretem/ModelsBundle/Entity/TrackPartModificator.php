<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="tracks_parts_modificators")
 */
class TrackPartModificator
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="part_type_id")
     */
    private $partTypeId;

    /**
     * @ORM\Column(type="integer", name="track_id")
     */
    private $trackId;

    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $modificator;

}

