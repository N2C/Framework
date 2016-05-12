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

    private $containerBuilder;

    public function __construct(ContainerBuilder $containerBuilder){
        $this->containerBuilder = $containerBuilder;
    }

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        foreach($this->containerBuilder->findTaggedServiceIds('n2c.core.navbar') as ){

        }


        $menu = $factory->createItem('root');
        $menu->addChild('Home', array('uri' => '/'));
        $menu->addChild('Comments', array('uri' => '#comments'));
        $menu->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));

        return $menu;
    }
}

