<?php
/**
 * Contains class BarcodeGenerator
 *
 * @package     courier\Sprinter\Utils
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-07
 * @version     2016-04-07
 */

namespace Konekt\Courier\Sprinter\Utils;


class BarcodeGenerator
{
    private $partnerBarcodePrefix;

    public function __construct($partnerBarcodePrefix)
    {
        $this->partnerBarcodePrefix = $partnerBarcodePrefix;
    }

    public function getBarcode()
    {
        $secondsSinceMidnight = (time() % 86400);
        return sprintf('%s%s%05d', $this->partnerBarcodePrefix, date('Ymd'), $secondsSinceMidnight);
    }
}