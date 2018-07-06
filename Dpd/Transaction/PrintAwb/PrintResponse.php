<?php

/**
 * Contains the PrintResponse class
 *
 * @package     Dpd\Transaction\PrintAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction\PrintAwb;


use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

class PrintResponse implements StatusAwareResponseInterface
{
    private $pdf;

    /**
     * PrintResponse constructor.
     *
     * @param $pdf
     */
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * @return mixed
     */
    public function getPdf()
    {
        return $this->pdf;
    }

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