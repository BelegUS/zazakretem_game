<?php

namespace ZaZakretem\ModelsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZaZakretemModelsBundle:Default:index.html.twig', array('name' => $name));
    }
}
