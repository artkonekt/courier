<?php

/**
 * Contains the ErrorResponse class
 *
 * @package     Dpd\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction;


use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

class ErrorResponse implements StatusAwareResponseInterface
{
    /** @var string */
    private $body;

    /**
     * ErrorResponse constructor.
     *
     * @param $body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * Returns the full error message as string
     */
    public function getErrorMessage()
    {
        $error = $this->body->error;
        return $error->message . ' (' . $error->context . ')';
    }

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return false;
    }
}