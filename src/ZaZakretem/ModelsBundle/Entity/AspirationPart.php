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


    /**
     * Set partId
     *
     * @param integer $partId
     *
     * @return AspirationPart
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
     * Set aspirationId
     *
     * @param integer $aspirationId
     *
     * @return AspirationPart
     */
    public function setAspirationId($aspirationId)
    {
        $this->aspirationId = $aspirationId;

        return $this;
    }

    /**
     * Get aspirationId
     *
     * @return integer
     */
    public function getAspirationId()
    {
        return $this->aspirationId;
    }

    /**
     * Set part
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Part $part
     *
     * @return AspirationPart
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
     * @param \ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration
     *
     * @return AspirationPart
     */
    public function setAspiration(\ZaZakretem\ModelsBundle\Entity\Aspiration $aspiration = null)
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
