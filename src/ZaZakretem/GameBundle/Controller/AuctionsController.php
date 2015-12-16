<?php

namespace ZaZakretem\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ZaZakretem\ModelsBundle\Entity\Car;

class AuctionsController extends Controller
{
    public function buyCarAction()
    {
        return $this->render('ZaZakretemGameBundle:Auctions:buyCar.html.twig', array(
                // ...
            ));    }

    public function sellCarAction()
    {
        return $this->render('ZaZakretemGameBundle:Auctions:sellCar.html.twig', array(
                // ...
            ));    }

    public function viewCarsAction()
    {
        $carsForSale = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Car')
        return $this->render('ZaZakretemGameBundle:Auctions:viewCars.html.twig', array(
                // ...
            ));    }

}
