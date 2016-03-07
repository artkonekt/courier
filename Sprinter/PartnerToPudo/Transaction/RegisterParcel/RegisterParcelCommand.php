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
        // framework initialization
        date_default_timezone_set('UTC');


        try {
            $soap_options = array('features' => SOAP_SINGLE_ELEMENT_ARRAYS);
            $wsdl = 'https://tsx.lapker.hu/PudoSandbox/PartnerPudoService?wsdl';
            //$wsdl = __DIR__ . '/../sprinter_lib/partnerpudo/PartnerPudoService.php';

            $opts = array(
                'ssl' => array('ciphers'=>'RC4-SHA')
            );
// SOAP 1.2 client
            $soap_options = array ('stream_context' => stream_context_create($opts) );

            $partnerCode = '0000001000';
            $partnerBarcodePrefix = 'PUDO'; // in business test phase, you get your own unique barcode prefix
            $counter = 1;

            $barcodePrefixToday = $partnerBarcodePrefix . date('Ymd'); // PUDO20150708 (+ dynamically ascending number)

            // parcel
            $simpleParcel = new Parcel(1, 'Normal', 0);
            $simpleParcel->setAutorizationCode($barcodePrefixToday . $counter); // The field of ’AuthoziationCode’ can be used for registering any IDs at our partner’s convenience (e.g. orderID). These values are stored in the database of PUDO.
            $simpleParcel->setBarCode($barcodePrefixToday . $counter); // PUDO201507081
            $simpleParcel->setCustomerType('B2C'); // Default value
            $simpleParcel->setCustomerName('Customer Name');
            $simpleParcel->setCustomerPostalCode('1097');
            $simpleParcel->setCustomerCity('Budapest');
            $simpleParcel->setCustomerAddress('Táblás u. 32/a');
            $simpleParcel->setCustomerPhone('+3613477300');
            $simpleParcel->setCustomerEmail('customer@lapker.hu');
            //$simpleParcel->ParcelCount = 1;
            $simpleParcel->setPackagePrice(900);
            $simpleParcel->setPriceAtDelivery(1000);

            $simpleParcel->setRegisterDate(new \DateTime());
            $simpleParcel->setTracking(true);
            //$simpleParcel->TransitTime = 0; // Default value
            $simpleParcel->setDestinationLocationId('0000101117'); // ShopID
            $simpleParcel->setIsPartnerInvoiced(false);
            $simpleParcel->setPackageType('Small');
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
            echo $e->getMessage();
        }

        return new RegisterParcelResponse($response);
    }
}