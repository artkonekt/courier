<?php
/**
 * Contains class SprinterGateway
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-06
 * @version     2016-04-06
 */

namespace Konekt\Courier\Sprinter;


use Konekt\Courier\Common\Model\Operations;

class SprinterGateway
{
    public function getSupportedOperations()
    {
        return [
            Operations::CREATE_AWB,
            Operations::SHOW_LABEL_HTML
        ];
    }

    public function isSupported($operationName)
    {
        return in_array($operationName, $this->getSupportedOperations());
    }
}