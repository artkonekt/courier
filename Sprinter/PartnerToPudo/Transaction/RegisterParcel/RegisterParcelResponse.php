<?php
/**
 * Contains class RegisterParcelResponse
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel;


use Konekt\Courier\Common\ResponseInterface;

class RegisterParcelResponse implements ResponseInterface
{
    private $response;

    /**
     * RegisterParcelResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Returns the created AWB number.
     *
     * @return string
     */
    public function getAwbNumber()
    {
        foreach($this->response->getRegisterParcelContainerResult()->ParcelResults as $parcelResult) {
            //print("\tOriginalBarcode: " . $parcelResult->getOriginalBarCode() . "\n");
            //print("\tNewBarCode: " . $parcelResult->getNewBarCode() . "\n");
            //print("\tShipmentID: " . $parcelResult->getShipmentID() . "\n");
            //print("\tErrorCode: " . $parcelResult->getErrorCode() . "\n");
            //print("\n");
            $shipmentId = $parcelResult->getShipmentID();
            break;
        }

        return $shipmentId;
    }

    public function isSuccess()
    {
        if ($this->response instanceof \Exception) {
            return false;
        }
        //print('ErrorCode: ' . $response->getRegisterParcelContainerResult()->ErrorCode . "\n");
        //foreach($response->getRegisterParcelContainerResult()->ParcelResults as $parcelResult) {
        //    print("\tOriginalBarcode: " . $parcelResult->getOriginalBarCode() . "\n");
        //    print("\tNewBarCode: " . $parcelResult->getNewBarCode() . "\n");
        //    print("\tShipmentID: " . $parcelResult->getShipmentID() . "\n");
        //    print("\tErrorCode: " . $parcelResult->getErrorCode() . "\n");
        //    print("\n");
        //}

        return $this->response->getRegisterParcelContainerResult()->ErrorCode != 'PSR_FAILED';
    }

    public function getErrorMessage()
    {
        if ($this->response instanceof \Exception) {
            return $this->response->getMessage();
        }

        foreach($this->response->getRegisterParcelContainerResult()->ParcelResults as $parcelResult) {
            //print("\tOriginalBarcode: " . $parcelResult->getOriginalBarCode() . "\n");
            //print("\tNewBarCode: " . $parcelResult->getNewBarCode() . "\n");
            //print("\tShipmentID: " . $parcelResult->getShipmentID() . "\n");
            //print("\tErrorCode: " . $parcelResult->getErrorCode() . "\n");
            //print("\n");
            $error = $parcelResult->getErrorCode();
            break;
        }
        return $error;
    }
}