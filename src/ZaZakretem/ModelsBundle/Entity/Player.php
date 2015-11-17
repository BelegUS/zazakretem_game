<?php

namespace ZaZakretem\ModelsBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registrationDate = 'CURRENT_TIMESTAMP';

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $money;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $smartness;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $composure;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $reflex;

    /**
     * @ORM\Column(type="integer", length=3)
     */
    private $courage;

    /**
     * @ORM\Column(type="integer")
     */
    private $xp;


}

