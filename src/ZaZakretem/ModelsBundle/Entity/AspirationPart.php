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
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Aspiration", inversedBy="parts")
     * @ORM\JoinColumn(name="aspiration_id", referencedColumnName="id")
     */
    private $aspiration;



    /**
     * Set part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $part
     *
     * @return AspirationPart
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
     * Set aspiration
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration
     *
     * @return AspirationPart
     */
    public function setAspiration(\ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration)
    {
        $this->aspiration = $aspiration;

        return $this;
    }

    /**
     * Get aspiration
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Aspiration
     */
    public function getAspiration()
    {
        return $this->aspiration;
    }
}
