<?php

/**
 * Contains the CreateShipmentResponse class
 *
 * @package     Konekt\Courier\Dpd\Transaction\CreateShipment
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-04
 */


namespace Konekt\Courier\Dpd\Transaction\CreateShipment;


use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

class CreateShipmentResponse implements StatusAwareResponseInterface
{

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        // TODO: Implement isSuccess() method.
    }
}