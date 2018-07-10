<?php

/**
 * Contains the FindSiteResponse class
 *
 * @package     Dpd\Transaction\FindSite
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-09
 */


namespace Konekt\Courier\Dpd\Transaction\FindSite;


use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

class FindSiteResponse implements StatusAwareResponseInterface
{
    private $response;

    /**
     * FindSiteResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * @return array
     */
    public function getSites()
    {
        return $this->response;
    }

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }
}