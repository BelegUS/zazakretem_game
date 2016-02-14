<?php

namespace ZaZakretem\GameBundle\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ZaZakretem\GameBundle\Controller\helpers\BaseController;
use ZaZakretem\ModelsBundle\Entity\Car;

class AuctionsController extends BaseController
{
    public function showCarAction($carId)
    {
        $car = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Car')->find($carId);
        return $this->render('ZaZakretemGameBundle:Auctions:showCar.html.twig', array(
            'car' => $car,
        ));
    }

    public function buyCarAction($carId)
    {
        $player = $this->getUser();
        $car = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Car')->find($carId);

        if(empty($car)) {
            throw new NotFoundHttpException;
        }

        $carBuyer = $this->container->get('buyer');

        $carBuyer->buyNewCar($player, $car);

        return $this->viewAuctionsAction();
    }

    public function sellCarAction($carId)
    {
        return $this->render('ZaZakretemGameBundle:Auctions:sellCar.html.twig', array(// ...
        ));
    }

    public function viewAuctionsAction()
    {
        $cars = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Car')->findAll();
        return $this->render('ZaZakretemGameBundle:Auctions:viewAuctions.html.twig', array(
            'cars' => $cars,
        ));
    }

}
