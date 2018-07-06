<?php

/**
 * Contains the Request class
 *
 * @package     Dpd\Api
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-05
 */


namespace Konekt\Courier\Dpd\Api;

use Guzzle\Http\Client;

class Api
{
    /**
     * @var string
     */
    protected $baseUrl = 'https://api.dpd.ro/v1';

    /**
     * @var int Timeout in seconds
     */
    protected $timeout = 3;

    /**
     * @param $path
     * @param $method
     * @param $payload
     *
     * @return \Guzzle\Http\EntityBodyInterface|string
     * @throws \Exception
     */
    public function call($path, $method, $payload)
    {
        $client = new Client();

        $request = $client->post(
            $this->baseUrl . '/' . $path,
            [
                'Content-type' => 'application/json',
                'charset' => 'utf-8',
            ],
            $payload,
            ['timeout' => $this->timeout]
        );

        $response = $client->send($request);

        return $response->getBody();
    }
}