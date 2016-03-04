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

namespace Konekt\Courier\FanCourier\Transaction\DeleteAwb;


use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB deletion response.
 */
class DeleteAwbResponse implements ResponseInterface
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
     * DeleteAwbResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->rawResponse = $response;

        if (false === strpos($response, 'DELETED')) {
            $this->errorMessage = $response;
        }
    }

    /**
     * Returns true in case of success.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return (null == $this->errorMessage);
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
}