<?php
/**
 * Contains class CreateAwbResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb;

use Exception;
use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the awb creation response.
 */
class CreateAwbResponse implements ResponseInterface
{
    private $lineNumber;

    private $awbNumber;

    private $price;

    private $errorMessage;

    /**
     * Public factory method for creating the responses from the raw API response.
     *
     * @param $rawApiResponse
     *
     * @return CreateAwbResponse[]
     */
    public static function createFromApiResponse($rawApiResponse)
    {
        $collection = [];

        foreach ($rawApiResponse as $key => $value) {
            $parts = explode(',', $value);

            if (1 == count($parts)) {
                //some generic API error: ie. authentication username is not correct
                $result = self::createErrorResult(0, $rawApiResponse[0]);
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

    /**
     * Factory method for creating an error response.
     *
     * @param $lineNumber
     * @param $errorMessage
     *
     * @return CreateAwbResponse
     */
    private static function createErrorResult($lineNumber, $errorMessage)
    {
        $result = new self;
        $result->lineNumber = $lineNumber;
        $result->errorMessage = $errorMessage;

        return $result;
    }

    /**
     * Factory method for creating a success response.
     *
     * @param $lineNumber
     * @param $awbNumber
     * @param $price
     *
     * @return CreateAwbResponse
     */
    private static function createSuccessResult($lineNumber, $awbNumber, $price)
    {
        $result = new self;
        $result->lineNumber = $lineNumber;
        $result->awbNumber = $awbNumber;
        $result->price = $price;

        return $result;
    }

    /**
     * Factory method for creating an error response from an exception thrown in the command.
     *
     * @param Exception $exception
     *
     * @return CreateAwbResponse
     */
    public static function createFromException(Exception $exception)
    {
        $collection = [];

        $collection[] = self::createErrorResult(0, $exception->getMessage());

        return $collection;
    }

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return (null === $this->errorMessage);
    }

    /**
     * Returns the created AWB number.
     *
     * @return string
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * Returns the line number of the item in the AWB CSV file to which this response object belongs.
     *
     * @return int
     */
    public function getLineNumber()
    {
        return (int) $this->lineNumber;
    }

    /**
     * Returns the price of the package delivery.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Returns the error message in case the response is error.
     *
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}