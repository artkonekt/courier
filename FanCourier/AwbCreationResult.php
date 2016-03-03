<?php
/**
 * Contains class AwbCreationResult
 *
 * @package     CourierBundle
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-02-25
 * @version     2016-02-25
 */

namespace Konekt\Courier\FanCourier;


class AwbCreationResult
{
    private $lineNumber;

    private $awbNumber;

    private $price;

    private $errorMessage;

    private function __construct()
    {
    }

    public static function createFromApiResponse($apiResponse)
    {
        $collection = [];

        foreach ($apiResponse as $key => $value) {
            $parts = explode(',', $value);

            if (1 == count($parts)) {
                //some generic API error: ie. authentication username is not correct
                $result = self::createErrorResult(0, $apiResponse[0]);
            } elseif (0 == $parts[1]) {
                //the API call was successful, but there are errors in the posted data
                $result = self::createErrorResult($parts[0], $parts[2]);
            } else {
                //all is correct
                $result = self::createSuccessResult($parts[0], $parts[2], $parts[3]);
            }

            $collection[] = $result;
        }

        return $collection;
    }

    private static function createErrorResult($lineNumber, $errorMessage)
    {
        $result = new self;
        $result->lineNumber = $lineNumber;
        $result->errorMessage = $errorMessage;

        return $result;
    }

    private static function createSuccessResult($lineNumber, $awbNumber, $price)
    {
        $result = new self;
        $result->lineNumber = $lineNumber;
        $result->awbNumber = $awbNumber;
        $result->price = $price;

        return $result;
    }

    public static function createFromException(\Exception $exception)
    {
        $collection = [];

        $collection[] = self::createErrorResult(0, $exception->getMessage());

        return $collection;
    }

    public function isSuccess()
    {
        return (null === $this->errorMessage);
    }

    /**
     * @return mixed
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * @return mixed
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}