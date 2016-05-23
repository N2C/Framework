<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 12/05/16
 * Time: 15:35
 */

namespace N2C\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    private $menuServices;
    

    public function __construct()
    {
        $this->menuServices = array();
    }

    public function addMenuService(MenuInterface $menuService)
    {
        $this->menuServices[] = $menuService;
    }
    


    public function getNavbarMenu()
    {

        $menu = new MenuItem();



        foreach($this->menuServices as $menuService) {
            $menuService->getNavbarItems($menu);
        }

        return $menu;
    }

    public function getTopBarItems()
    {
        $menu = new MenuItem();

        foreach($this->menuServices as $menuService){
            $menuService->getTopBarItems($menu);
        }
    }
}

