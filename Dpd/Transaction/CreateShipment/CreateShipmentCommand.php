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
        $recipient = (object)[
            "phone1" => (object)[
                "number" => "0740242854",
                //"number" => "1234",
            ],
            "privatePerson" => true,
            "clientName" => "TEST",
            "contactName" => "TEST",
            "email" => "a@b.c",
            "address" => (object)[
                "siteName" => "Sibiu",
                "streetType" => "str.",
                "streetName" => "ACILIU",
                "streetNo" => "3",
            ],
        ];

        //TODO: if after 17:00, pickup is possible only the next day (error is returned if not)
        if ((date('H') < 17)) {
            $pickupDate = date("Y-m-d");
        } else {
            $pickupDate = date("Y-m-d", strtotime('tomorrow'));
        }

        $service = (object)[
            'pickupDate' => $pickupDate,
            "serviceId" => 2002,
            "additionalServices" => (object)[
                "declaredValue" => (object)[
                    "amount" => 100.0,
                ],
                "returns" => (object)[
                    "rod" => (object)[
                        "enabled" => true,
                    ],
                    "returnReceipt" => [
                        "enabled" => true,
                    ],
                    "swap" => [
                        "serviceId" => 2002,
                        "parcelsCount" => 1,
                    ],
                ],
            ],
        ];

        $content = (object)[
            "parcelsCount" => 1,
            "totalWeight" => 20.0,
            "contents" => "FURNITURE",
            "package" => "BOX",
        ];

        $payment = (object) [
            "courierServicePayer" => "SENDER"
        ];

        $requestParams = [
            'recipient' => $recipient,
            'service' => $service,
            'content' => $content,
            'payment' => $payment,
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