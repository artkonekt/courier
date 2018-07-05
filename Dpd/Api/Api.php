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
    protected $baseUrl = 'https://api.dpd.ro/v1';

    public function call($path, $method, $payload)
    {
//        var_dump($payload);


        $client = new Client();

        $request = $client->post(
            $this->baseUrl . '/' . $path,
            [
                'Content-type' => 'application/json',
                'charset' => 'utf-8',
            ],
            $payload
        );

        $response = $client->send($request);

        print_r($response->getBody(true));
        die;
    }
}