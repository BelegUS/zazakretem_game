<?php

namespace ZaZakretem\ModelsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Player", mappedBy="user")
     */
    private $player;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $registrationDate = 'CURRENT_TIMESTAMP';


    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return User
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set player
     *
     * @param \ZaZakretem\ModelsBundle\Entity\Player $player
     *
     * @return User
     */
    public function setPlayer(\ZaZakretem\ModelsBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \ZaZakretem\ModelsBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }
}
