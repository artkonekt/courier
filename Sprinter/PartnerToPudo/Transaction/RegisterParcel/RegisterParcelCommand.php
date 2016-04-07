<?php
/**
 * Contains class RegisterParcelCommand
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel;


use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel;
use Konekt\Courier\Sprinter\PartnerToPudo\Component\PartnerPudoService;
use Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainer;
use Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest;
use Konekt\Courier\Sprinter\PartnerToPudo\Component\Supplier;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\AbstractCommand;
use SoapFault;

class RegisterParcelCommand extends AbstractCommand
{

    /**
     * Takes a request and turns it into a response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(RequestInterface $request)
    {
        /** @var RegisterParcelRequest $request */
        // framework initialization
        date_default_timezone_set('UTC'); //what's this?


        try {
            $soap_options = array('features' => SOAP_SINGLE_ELEMENT_ARRAYS);
            $wsdl = 'https://tsx.lapker.hu/PudoSandbox/PartnerPudoService?wsdl';
            //$wsdl = __DIR__ . '/../sprinter_lib/partnerpudo/PartnerPudoService.php';

            $opts = array(
                'ssl' => array('ciphers'=>'RC4-SHA')
            );
// SOAP 1.2 client

            $soap_options = array ('stream_context' => stream_context_create($opts) );

            $partnerCode = $this->getConfiguration()->getPartnerCode();
            $partnerBarcodePrefix = $this->getConfiguration()->getPartnerBarcodePrefix(); // in business test phase, you get your own unique barcode prefix
            $counter = 1;

            $barcodePrefixToday = $partnerBarcodePrefix . date('Ymd'); // PUDO20150708 (+ dynamically ascending number)

            $package = $request->getPackage();

            // parcel
            $simpleParcel = new Parcel(1, 'Normal', 0);
            $simpleParcel->setAutorizationCode($barcodePrefixToday . $counter); // The field of ’AuthoziationCode’ can be used for registering any IDs at our partner’s convenience (e.g. orderID). These values are stored in the database of PUDO.
            $simpleParcel->setBarCode($barcodePrefixToday . $counter); // PUDO201507081
            $simpleParcel->setCustomerType('B2C'); // Default value
            $simpleParcel->setCustomerName($package->customerName);
            $simpleParcel->setCustomerPostalCode($package->customerPostalCode);
            $simpleParcel->setCustomerCity($package->customerCity);
            $simpleParcel->setCustomerAddress($package->customerAddress);
            $simpleParcel->setCustomerPhone($package->customerPhone);
            $simpleParcel->setCustomerEmail($package->customerEmail);
            //$simpleParcel->ParcelCount = 1;
            $simpleParcel->setPackagePrice($package->packagePrice);
            $simpleParcel->setPriceAtDelivery($package->priceAtDelivery);

            $simpleParcel->setRegisterDate(new \DateTime());
            $simpleParcel->setTracking(true);
            //$simpleParcel->TransitTime = 0; // Default value
            $simpleParcel->setDestinationLocationId($package->destinationLocationId);//$request->getPackage()->posId); // ShopID//0000101117
            $simpleParcel->setIsPartnerInvoiced($package->isPartnerInvoiced);
            $simpleParcel->setPackageType($package->packageType);
            //$simpleParcel->ServiceType = 'Normal';

            $simpleParcel->setParcelCreationStatus('Create');

            $parcels = array();
            $parcels[] = $simpleParcel;

            $request = new RegisterParcelContainerRequest(Supplier::Partner);
            //$request->sets = $supplier;
            $request->setPartnerCode($partnerCode);
            $request->setParcelContainer($parcels);
            $request->setArriveDate(new \DateTime());

            // client
            $client = new PartnerPudoService($soap_options, $wsdl);
            $response = $client->RegisterParcelContainer(new RegisterParcelContainer($request));

        }  catch(SoapFault $e){
            $response = $e;
        }

        return new RegisterParcelResponse($response);
    }
}