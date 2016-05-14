<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 13/05/16
 * Time: 21:45
 */

namespace N2C\UserBundle\Menu;



use Knp\Menu\MenuItem;
use N2C\CoreBundle\Menu\NavbarInterface;

class Navbar implements NavbarInterface
{
    public function getNavbarItems(MenuItem $menuItem){
        $menuItem->addChild('Home', array('uri' => '/'))
            ->addChild('Comments', array('uri' => '#comments'))
            ->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));
    }
}