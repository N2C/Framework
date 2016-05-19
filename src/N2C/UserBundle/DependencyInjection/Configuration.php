<?php

namespace N2C\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('n2c_user', 'array');

       /** $rootNode->children()
                    ->arrayNode('dashboard')
                        ->children()
                            ->arrayNode('blocks')
                                ->defaultValue(array(array(
                                    'position' => 'left',
                                    'settings' => array(),
                                    'type' => 'n2c.core.block.default',
                                    'roles' => array(),
                                )))
                            ->prototype('array')
                                ->children()
                                    ->scalarNode('type')->cannotBeEmpty()->end()
                                    ->arrayNode('roles')
                                        ->defaultValue(array())
                                        ->prototype('scalar')->end()
                                    ->end()
                                    ->arrayNode('settings')
                                        ->useAttributeAsKey('id')
                                        ->prototype('variable')->defaultValue(array())->end()
                                    ->end()
                                    ->scalarNode('position')->defaultValue('right')->end()
                                    ->scalarNode('class')->defaultValue('col-md-4')->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
        ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
**/
        return $treeBuilder;
    }
}
