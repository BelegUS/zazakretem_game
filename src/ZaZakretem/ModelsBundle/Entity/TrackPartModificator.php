<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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

    /**
     * @ORM\ManyToOne(targetEntity="PartType")
     * @ORM\JoinColumn(name="part_type_id", referencedColumnName="id")
     */
    private $partType;

    /**
     * @ORM\ManyToOne(targetEntity="Track", inversedBy="modificators")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id")
     */
    private $track;

}

