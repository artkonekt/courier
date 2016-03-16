<?php
/**
 * Contains interface StatusAwareResponse
 *
 * @package     Konekt\Courier\Common
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-16
 * @version     2016-03-16
 */

namespace Konekt\Courier\Common\Response;


use Konekt\Courier\Common\ResponseInterface;

interface StatusAwareResponseInterface extends ResponseInterface
{
    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess();
}