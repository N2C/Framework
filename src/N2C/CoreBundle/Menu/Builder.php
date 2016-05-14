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

    private $navbarServices;

    public function __construct()
    {
        $this->navbarServices = array();
    }

    public function addNavbarService(NavbarInterface $navbarService)
    {
        $this->navbarServices[] = $navbarService;
    }


    public function navbarMenu(FactoryInterface $factory, array $options)
    {

        $menu = $factory->createItem('root');

        //if(empty($this->navbarServices)){throw new \Exception('erreur');}

        foreach ($this->navbarServices as $menuBuilder){
            $menuBuilder->getNavbarItem($menu);
        }

        return $menu;
    }
}

