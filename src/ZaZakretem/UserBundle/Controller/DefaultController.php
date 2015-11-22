<?php

namespace ZaZakretem\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZaZakretemUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
