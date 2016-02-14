<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-14
 * Time: 15:01
 */

namespace ZaZakretem\GameBundle\Controller;


use ZaZakretem\GameBundle\Controller\helpers\BaseController;

class GarageController extends BaseController
{
    public function showGarageAction()
    {
        $player = $this->getUser();
        $playerCars = $player->getCars();
        foreach($playerCars as $playerCar) {
            var_dump($playerCar);
        }
        exit();
    }

}