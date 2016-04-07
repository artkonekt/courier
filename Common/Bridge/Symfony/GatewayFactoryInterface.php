<?php
/**
 * Contains class GatewayFactoryInterface
 *
 * @package     Konekt\Courier\Common\Bridge\Symfony
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-07
 * @version     2016-04-07
 */

namespace Konekt\Courier\Common\Bridge\Symfony;


interface GatewayFactoryInterface
{
    public function getConfiguration();
}