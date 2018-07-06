<?php

/**
 * Contains the SuccessResponse class
 *
 * @package     Dpd\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction;


use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

/**
 * Generic response class for all successful responses without any meaningful data.
 *
 * @package Konekt\Courier\Dpd\Transaction
 */
class SuccessResponse implements StatusAwareResponseInterface
{

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }
}