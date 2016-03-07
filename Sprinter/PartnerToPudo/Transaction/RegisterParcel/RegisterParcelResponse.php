<?php
/**
 * Contains class RegisterParcelResponse
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel;


use Konekt\Courier\Common\ResponseInterface;

class RegisterParcelResponse implements ResponseInterface
{
    private $response;

    /**
     * RegisterParcelResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }


}