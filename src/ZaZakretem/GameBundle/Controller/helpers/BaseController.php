<?php

namespace ZaZakretem\GameBundle\Controller\helpers;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use ZaZakretem\ModelsBundle\Entity\Player;

class BaseController extends Controller
{

    /**
     * @return Player Current User
     * @throws AccessDeniedException
     */
    public function getUser()
    {
        $user = parent::getUser();
        if(empty($user)) {
            throw $this->createAccessDeniedException();
        }
        return $user;
    }
}