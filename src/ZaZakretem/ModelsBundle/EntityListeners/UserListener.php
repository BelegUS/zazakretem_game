<?php

namespace ZaZakretem\ModelsBundle\EntityListeners;


use Doctrine\ORM\Event\LifecycleEventArgs;
use ZaZakretem\ModelsBundle\Entity\User;
use DoctrineORMMapping as ORM;

class UserListener
{

    /** @ORM\PostPersist */
    public function postPersistHandler(User $user, LifecycleEventArgs $event)
    {
        echo('Kitten');
        exit();
    }

}