<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 12/05/16
 * Time: 19:55
 */

namespace N2C\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AdminPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
    }
}