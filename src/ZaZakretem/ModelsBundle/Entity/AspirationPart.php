<?php

namespace ZaZakretem\ModelsBundle\Entity;

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
     * @OneToOne(targetEntity="Part")
     * @JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

    /**
     * @ManyToOne(targetEntity="Aspiration", inversedBy="parts")
     * @JoinColumn(name="aspiration_id", referencedColumnName="id")
     */
    private $aspiration;

}

