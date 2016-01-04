<?php

namespace ZaZakretem\ModelsBundle\Interfaces;

interface CarInterface
{
    public function getBrand();

    public function getBrandName();

    public function getModelName();

    public function getDisplacement();

    public function getModelYear();

    public function getHorsepower();

    public function getTorque();

    public function getMass();

    public function getVmax();

    public function getAcceleration();

    public function getHandling();

    public function getPrice();

    public function getDrivetrain();

    public function getDrivetrainName();

    public function getAspiration();

    public function getAspirationName();
}