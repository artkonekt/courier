<?php

/**
 * Contains the CancelShipmentRequest class
 *
 * @package     Konekt\Courier\Dpd\Transaction\CancelShipment
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction\CancelShipment;


use Konekt\Courier\Common\RequestInterface;

class CancelShipmentRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $awbNumber;

    /**
     * AwbToPdfRequest constructor.
     *
     * @param string $awbNumber
     */
    public function __construct($awbNumber)
    {
        $this->awbNumber = $awbNumber;
    }

    /**
     * Returns the number of the AWB.
     *
     * @return string
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }
}