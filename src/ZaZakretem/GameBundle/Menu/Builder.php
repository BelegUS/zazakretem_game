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

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->setChildrenAttribute('class', 'sidebar-menu');
        $menu->addChild('Dash', array('route' => '_index'));

//        // access services from the container!
//        $em = $this->container->get('doctrine')->getManager();
//        // findMostRecent and Blog are just imaginary examples
//        $blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

//        $menu->addChild('Latest Blog Post', array(
//            'route' => 'blog_show',
//            'routeParameters' => array('id' => $blog->getId())
//        ));

        // create another menu item
        $menu->addChild('Auctions', array('route' => 'view_auctions'));

        $menu->addChild('Garage', array('route' => 'view_garage'));
        // you can also add sub level's to your menu's as follows
//        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
}