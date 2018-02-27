<?php
/**
 * Contains class DeleteAwbResponse
 *
 * @package     Konekt\Courier\FanCourier\Transaction\DeleteAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\DeliveryDate;


use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB deletion response.
 */
class DeliveryDateResponse implements ResponseInterface
{
    /**
     * @var string
     */
    private $rawResponse;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $date;

    /**
     * DeleteAwbResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->rawResponse = $response;
        $this->state = $this->getDateFromResponse();
    }

    /**
     * Returns true in case of success.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return !empty($this->date);
    }
    /**
     * Returns the error message if the response is not a successful one.
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->rawResponse;
    }

    public function getDate()
    {
        return $this->date;
    }

    private function getDateFromResponse()
    {
        //REALLY HACKY SOLUTION, GET RID OF THIS AS SOON AS POSSIBLE
        if (strpos($this->rawResponse, 'livrat in data')) {
            $this->date = substr($this->rawResponse, -17, -1);
        }
    }
}