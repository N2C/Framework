<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 13/05/16
 * Time: 21:45
 */

namespace N2C\CoreBundle\Menu;


use Knp\Menu\MenuItem;

interface NavbarInterface
{
    public function getNavbarItems(MenuItem $menu);
}