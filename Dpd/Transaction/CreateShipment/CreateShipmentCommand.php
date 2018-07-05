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

use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Dpd\Api\Api;
use Konekt\Courier\Dpd\Api\CreateShipment;
use Konekt\Courier\Dpd\Transaction\AbstractCommand;
use Konekt\Courier\Common\RequestInterface;

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

        $service = (object)[
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
        $api->call('shipment', 'post', json_encode($params));
    }
}