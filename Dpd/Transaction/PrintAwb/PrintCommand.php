<?php

/**
 * Contains the PrintCommand class
 *
 * @package     Dpd\Transaction\PrintAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Transaction\PrintAwb;


use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Dpd\Api\Api;
use Konekt\Courier\Dpd\Transaction\AbstractCommand;
use Konekt\Courier\Dpd\Transaction\ErrorResponse;

class PrintCommand extends AbstractCommand
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
            'paperSize' => "A4_4xA6",
            'parcels' => [
                (object) [
                    'parcel' => (object) [
                        'id' => $request->getAwbNumber()
                    ]
                ]
            ]
        ];

        $params = array_merge(
            $this->getAuthParams(),
            $requestParams
        );

        $api = new Api();

        try {
            $jsonResponse = $api->call('print', 'post', json_encode($params));
            $response = json_decode($jsonResponse);

            if (isset($response->error)) {
                return new ErrorResponse($response);
            } else {
                return new PrintResponse($jsonResponse);
            }
        } catch (Exception $e) {
            return new GenericErrorResponse($e->getMessage());
        }
    }
}