<?php
/**
 * Contains class Configuration
 *
 * @package     Konekt\Courier\Sprinter\Model
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-06
 * @version     2016-04-06
 */

namespace Konekt\Courier\Sprinter\Model;


class Configuration
{
    private $partnerCode;

    private $partnerBarcodePrefix;

    /**
     * Configuration constructor.
     *
     * @param $partnerCode
     * @param $partnerBarcodePrefix
     */
    public function __construct($partnerCode = '0000001000', $partnerBarcodePrefix = 'PUDO')
    {
        $this->partnerCode = $partnerCode;
        $this->partnerBarcodePrefix = $partnerBarcodePrefix;
    }

    /**
     * @return mixed
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * @return mixed
     */
    public function getPartnerBarcodePrefix()
    {
        return $this->partnerBarcodePrefix;
    }
}