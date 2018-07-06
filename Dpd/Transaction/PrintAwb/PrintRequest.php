<?php

/**
 * Contains the PrintRequest class
 *
 * @package     Dpd\Transaction\PrintAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction\PrintAwb;

use Konekt\Courier\Common\RequestInterface;

class PrintRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $awbNumber;

    /**
     * @param string $awbNumber
     */
    public function __construct($awbNumber)
    {
        $this->awbNumber = $awbNumber;
    }

    /**
     * Returns the number of the AWB.
     *
     * @return mixed
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }
}