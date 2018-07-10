<?php

/**
 * Contains the FindSiteCommand class
 *
 * @package     Dpd\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-09
 */


namespace Konekt\Courier\Dpd\Transaction\FindSite;


use Exception;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Common\ResponseInterface;
use Konekt\Courier\Common\Utils\StringNormalizer;
use Konekt\Courier\Dpd\Api\Api;
use Konekt\Courier\Dpd\GenericErrorResponse;
use Konekt\Courier\Dpd\Transaction\AbstractCommand;
use Konekt\Courier\Dpd\Transaction\ErrorResponse;

class FindSiteCommand extends AbstractCommand
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
        $normalizer = new StringNormalizer();

        $requestParams = [
            'countryId' => '642', //Romania
            'name' => $normalizer->unaccent($request->getName()),
            'region' => $normalizer->unaccent($request->getRegion())
        ];

        $params = array_merge(
            $this->getAuthParams(),
            $requestParams
        );

        $api = new Api();

        try {
            $jsonResponse = $api->call('location/site', 'post', json_encode($params));
            $response = json_decode($jsonResponse);

            if (isset($response->error)) {
                return new ErrorResponse($response);
            } else {
                return new FindSiteResponse($response->sites);
            }
        } catch (Exception $e) {
            return new GenericErrorResponse($e->getMessage());
        }
    }
}