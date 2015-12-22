<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2015-12-22
 * Time: 22:23
 */

namespace ZaZakretem\ModelsBundle\Interfaces;


interface SubTypeInterface
{
    public function getId();

    public function setName($name);

    public function getName();

    public function setDescription($description);

    public function getDescription();
}