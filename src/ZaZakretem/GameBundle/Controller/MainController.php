<?php

namespace ZaZakretem\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('::main.html.twig', array(
                // ...
            ));    }

}
