<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 13/05/16
 * Time: 21:56
 */

namespace N2C\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class MenuCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('n2c_core.menu_builder')) {
            return;
        }

        foreach ($container->findTaggedServiceIds('n2c_core.menu') as $id => $attributes) {
            $container->getDefinition('n2c_core.menu_builder')->addMethodCall('addMenuService', array(new Reference($id)));
        }
    }
}