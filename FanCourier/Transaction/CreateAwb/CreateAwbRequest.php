<?php
/**
 * Contains class CreateAwbRequest
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb;

use Konekt\Courier\Common\RequestInterface;

class CreateAwbRequest implements RequestInterface
{
    private $package;

    public function __construct($package)
    {
        $this->package = $package;
    }

    /**
     * @return mixed
     */
    public function getPackage()
    {
        return $this->package;
    }
}