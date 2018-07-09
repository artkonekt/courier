<?php

/**
 * Contains class CreateShipmentCommand
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-04
 * @version     2018-07-04
 */

namespace Konekt\Courier\Dpd\Transaction\CreateShipment;

use Exception;
use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Dpd\Api\Api;
use Konekt\Courier\Dpd\Api\CreateShipment;
use Konekt\Courier\Dpd\GenericErrorResponse;
use Konekt\Courier\Dpd\Package;
use Konekt\Courier\Dpd\Transaction\AbstractCommand;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Dpd\Transaction\ErrorResponse;

class CreateShipmentCommand extends AbstractCommand
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
        /** @var Package $package */
        $package = $request->getPackage();

        $recipient = (object)[
            "phone1" => (object)[
                "number" => $package->recipient_phone1_number,
            ],
            "privatePerson" => $package->recipient_privatePerson,
            "clientName" => $package->recipient_clientName,
            "contactName" => $package->recipient_contactName,
            "email" => $package->recipient_email,

            // TODO: problem here: we don't have separate fields for the address
            "address" => (object)[
                "siteType" => 'or.',
                "siteName" => $package->recipient_address_siteName,
                "streetType" => "str.",
                "streetName" => $package->recipient_address_streetName,
                //This is required by the API, but we have the info in streetName, so we leave it empty
                "streetNo" => "3",
            ],
        ];



        $service = (object)[
            'pickupDate' => $package->service_pickupDate,
            "serviceId" => $package->service_serviceId,
            "additionalServices" => (object)[
                "declaredValue" => (object)[
                    "amount" => $package->service_additionalServices_declaredValue_amount,
                ],

                // "Ramburs" is set below, however API gives an error:
                //      Eroare: COD not allowed for seller (sla.cod.cod-not-allowed-for-client)
                // Waiting for DPD support for clarifications, commented out until then.

                /*"cod" => (object) [
                    "amount" => 111.34,
                    "payoutToThirdParty" => true
                ]*/
            ],
        ];

        $content = (object)[
            "parcelsCount" => $package->content_parcelsCount,
            "totalWeight" => $package->content_totalWeight,
            "contents" => $package->content_contents,
            "package" => $package->content_package,
        ];

        $payment = (object) [
            "courierServicePayer" => "SENDER"
        ];

        $requestParams = [
            'recipient' => $recipient,
            'service' => $service,
            'content' => $content,
            'payment' => $payment,

            'shipmentNote' => $package->shipmentNote,
            'ref1' => $package->ref1
        ];

        $params = array_merge(
            $this->getAuthParams(),
            $requestParams
        );

        $api = new Api();

        try {
            $jsonResponse = $api->call('shipment', 'post', json_encode($params));
            $response = json_decode($jsonResponse);

            if (isset($response->error)) {
                return new ErrorResponse($response);
            } else {
                return new CreateShipmentResponse($response);
            }
        } catch (Exception $e) {
            return new GenericErrorResponse($e->getMessage());
        }
    }
}