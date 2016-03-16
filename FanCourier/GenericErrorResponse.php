<?php
/**
 * Contains class GenericErrorResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-16
 * @version     2016-03-16
 */

namespace Konekt\Courier\FanCourier;
use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

/**
 * Response class abstracting the AWB creation error response. Represents a generic error, it is a per transaction error,
 * it tells that none of the AWB's can be generated.
 */
class GenericErrorResponse implements StatusAwareResponseInterface
{
    /**
     * CreateAwbErrorResponse constructor.
     *
     * @param $errorMessage
     */
    public function __construct($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns the error message.
     *
     * @return mixed
     */
    public function getErrorMessage()
    {
        return sprintf("Eroare generică (%s). Contactați echipa suport.", $this->errorMessage);
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return false;
    }
}