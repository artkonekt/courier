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
     * @var string[]
     */
    private $parcelIds;

    /**
     * @param string[] $parcelIds
     */
    public function __construct($parcelIds)
    {
        $this->parcelIds = $parcelIds;
    }

    /**
     * Returns the parcel ids.
     *
     * @return mixed
     */
    public function getParcelIds()
    {
        return $this->parcelIds;
    }
}