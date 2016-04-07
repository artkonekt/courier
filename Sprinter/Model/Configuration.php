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


use Konekt\Courier\Sprinter\Utils\BarcodeGenerator;

class Configuration
{
    private $partnerCode;

    private $partnerBarcodePrefix;

    /**
     * @var BarcodeGenerator
     */
    private $barcodeGenerator;

    /**
     * Configuration constructor.
     *
     * @param $partnerCode
     * @param $partnerBarcodePrefix
     */
    public function __construct($partnerCode, $partnerBarcodePrefix)
    {
        $this->partnerCode = $partnerCode;
        $this->partnerBarcodePrefix = $partnerBarcodePrefix;
        //TODO: inject this
        $this->barcodeGenerator = new BarcodeGenerator($this->partnerBarcodePrefix);
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

    /**
     * @return BarcodeGenerator
     */
    public function getBarcodeGenerator()
    {
        return $this->barcodeGenerator;
    }
}