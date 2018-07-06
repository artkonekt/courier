<?php
/**
 * Contains class GenericErrorResponse
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-05
 * @version     2018-07-05
 */

namespace Konekt\Courier\Dpd;
use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

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