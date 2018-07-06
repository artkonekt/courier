<?php

/**
 * Contains the CancelShipmentCommand class
 *
 * @package     Dpd\Transaction\CancelShipment
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction\CancelShipment;


use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Dpd\Api\Api;
use Konekt\Courier\Dpd\GenericErrorResponse;
use Konekt\Courier\Dpd\Transaction\AbstractCommand;
use Exception;
use Konekt\Courier\Dpd\Transaction\ErrorResponse;
use Konekt\Courier\Dpd\Transaction\SuccessResponse;

class CancelShipmentCommand extends AbstractCommand
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
        $requestParams = [
            'shipmentId' => $request->getAwbNumber(),
            'comment' => 'Stergere din admin'
        ];

        $params = array_merge(
            $this->getAuthParams(),
            $requestParams
        );

        $api = new Api();

        try {
            $jsonResponse = $api->call('shipment/cancel', 'post', json_encode($params));
            $response = json_decode($jsonResponse);

            if (isset($response->error)) {
                return new ErrorResponse($response);
            } else {
                return new SuccessResponse();
            }
        } catch (Exception $e) {
            return new GenericErrorResponse($e->getMessage());
        }
    }
}