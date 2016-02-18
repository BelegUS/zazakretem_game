<?php
/**
 * Created by PhpStorm.
 * User: BelegUS
 * Date: 2016-01-09
 * Time: 01:02
 */

namespace ZaZakretem\GameBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use ZaZakretem\ModelsBundle\Entity\Player;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $em = $this->container->get('doctrine')->getManager();
        /**
         * @var Player $player
         */
        $player = $this->container->get('security.token_storage')->getToken()->getUser();

        $menu->setChildrenAttribute('class', 'sidebar-menu');
        $menu->addChild('Dash', array('route' => '_index'));

//        // findMostRecent and Blog are just imaginary examples
//        $blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

//        $menu->addChild('Latest Blog Post', array(
//            'route' => 'blog_show',
//            'routeParameters' => array('id' => $blog->getId())
//        ));

        // create another menu item
        $menu->addChild('Auctions', array('route' => 'view_auctions'));

        if($player->hasActiveCar()) {
            $menu->addChild('Garage', array('route' => 'view_garage'));

            $menu->addChild('Go Touge', array(
                'uri' => 'javascript:;',
                'attributes'=>array('class'=>'sub-menu'),
                'childrenAttributes'=>array('class'=>'sub')
            ));


            $availableTracks = $em->getRepository('ZaZakretemModelsBundle:Track')->findAll();
            foreach ($availableTracks as $track) {
                $menu['Go Touge']->addChild($track->getName(), array(
                    'route' => 'view_track',
                    'routeParameters' => array('trackId' => $track->getId()),
                ));
            }
        }
        // you can also add sub level's to your menu's as follows
//        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}