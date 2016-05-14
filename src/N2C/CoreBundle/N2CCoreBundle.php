<?php

namespace N2C\CoreBundle;

use N2C\CoreBundle\DependencyInjection\Compiler\NavbarCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class N2CCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new NavbarCompilerPass());
    }
}
