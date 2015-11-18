<?php

namespace ZaZakretem\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aspirations_parts")
 */
class AspirationPart
{
    /**
     * @ORM\Column(type="integer", name="part_id")
     * @ORM\Id
     */
    private $partId;

    /**
     * @ORM\Column(type="integer", name="aspiration_id")
     * @ORM\Id
     */
    private $aspirationId;

    /**
     * @ORM\OneToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

    /**
     * @ORM\ManyToOne(targetEntity="Aspiration", inversedBy="parts")
     * @ORM\JoinColumn(name="aspiration_id", referencedColumnName="id")
     */
    private $aspiration;

}

