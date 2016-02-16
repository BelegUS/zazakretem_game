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
    public function viewGarageAction()
    {
        $player = $this->getUser();
        $playerCars = $player->getCars();

        return $this->render('ZaZakretemGameBundle:Garage:viewGarage.html.twig', array('cars'=>$playerCars));
    }

    public function activateCarAction($playerCarId)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $player = $this->getUser();
        $playerCar = $em->getRepository('ZaZakretemModelsBundle:PlayerCar')->findOneBy(array('id'=>$playerCarId, 'player'=>$player));
        if($playerCar) {
            $player->setActiveCar($playerCar);

            $em->persist($player);
            $em->flush();
        }
        return $this->redirectToRoute('view_garage');
    }

}