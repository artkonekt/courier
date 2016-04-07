<?php
/**
 * Contains class FancourierGatewayFactory
 *
 * @package     courier\FanCourier\Bridge\Symfony
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-07
 * @version     2016-04-07
 */

namespace Konekt\Courier\FanCourier\Bridge\Symfony;


use Konekt\Courier\Common\Bridge\Symfony\GatewayFactoryInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class FancourierGatewayFactory implements GatewayFactoryInterface
{

    public function getConfiguration()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('fancourier');

        $rootNode
            ->children()
                ->arrayNode('configuration')
                    ->children()
                        ->scalarNode('username')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('user_pass')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('client_id')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end() //configuration
            ->end();

        return $rootNode;
    }
}