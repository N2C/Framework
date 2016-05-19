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
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
        $this->navbarServices = array();
    }

    public function addNavbarService(NavbarInterface $navbarService)
    {
        $this->navbarServices[] = $navbarService;
    }


    public function getNavbarMenu(array $options)
    {

        $menu = $this->factory->createItem('root');

        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Projects')
            ->setAttribute('icon', 'fa fa-list');
        $menu->addChild('Employees')
            ->setAttribute('icon', 'fa fa-group');
        foreach ($this->navbarServices as $menuBuilder){
            $menuBuilder->getNavbarItems($menu);
        }

        return $menu;
    }
}

