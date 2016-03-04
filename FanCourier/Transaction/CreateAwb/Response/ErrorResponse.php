<?php
/**
 * Contains class CreateAwbErrorResponse
 *
 * @package     Konekt\Courier\FanCourier\Transaction\CreateAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb\Response;

/**
 * Response class abstracting the AWB creation error response.
 */
class ErrorResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $errorMessage;

    /**
     * CreateAwbErrorResponse constructor.
     *
     * @param $lineNumber
     * @param $errorMessage
     */
    public function __construct($lineNumber, $errorMessage)
    {
        $this->lineNumber = $lineNumber;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns the error message.
     *
     * @return mixed
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return false;
    }
}