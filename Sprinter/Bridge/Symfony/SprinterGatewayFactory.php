<?php
/**
 * Contains class SprinterGatewayFactory
 *
 * @package     Konekt\Courier\Sprinter\Bridge\Symfony
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-07
 * @version     2016-04-07
 */

namespace Konekt\Courier\Sprinter\Bridge\Symfony;

use Konekt\Courier\Common\Bridge\Symfony\GatewayFactoryInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class SprinterGatewayFactory implements GatewayFactoryInterface
{
    public function getConfiguration()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sprinter');

        $rootNode
            ->children()
                ->arrayNode('configuration')
                    ->children()
                        ->scalarNode('partnerCode')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('partnerBarcodePrefix')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()//configuration
            ->end();

        return $rootNode;
    }
}