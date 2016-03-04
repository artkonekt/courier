<?php
/**
 * Contains class Factory
 *
 * @package     Konekt\Courier\FanCourier\Transaction\CreateAwb\Response
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb\Response;
use Exception;

/**
 * Factory class for creating the right response objects.
 */
class Factory
{
    /**
     * Public factory method for creating the responses from the raw API response.
     *
     * @param $rawApiResponse
     *
     * @return \Konekt\Courier\FanCourier\Transaction\CreateAwb\Response\AbstractResponse[]
     * @throws \Exception
     */
    public static function createResponse($rawApiResponse)
    {
        $collection = [];

        foreach ($rawApiResponse as $key => $value) {
            $parts = explode(',', $value);

            if (1 == count($parts)) {
                //some generic API error: ie. authentication username is not correct
                throw new Exception($rawApiResponse[0]);
            } elseif (0 == $parts[1]) {
                //the API call was successful, but there are errors in the posted data
                $result = new ErrorResponse($parts[0], $parts[2]);
            } else {
                //all is correct
                $result = new SuccessResponse($parts[0], $parts[2], $parts[3]);
            }

            $collection[] = $result;
        }

        return $collection;
    }
}