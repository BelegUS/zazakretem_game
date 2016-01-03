<?php

namespace ZaZakretem\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZaZakretem\ModelsBundle\Entity\Car;

class AuctionsController extends Controller
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
        return $this->render('ZaZakretemGameBundle:Auctions:buyCar.html.twig', array(// ...
        ));
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
