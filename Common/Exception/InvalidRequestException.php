<?php

/**
 * Contains class InvalidRequestException
 *
 * @package     ${NAMESPACE}
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\Common\Exception;

class InvalidRequestException extends CourierException
{
    /**
     * @var mixed
     */
    private $object;

    /**
     * InvalidRequestException constructor.
     *
     * @param mixed $object
     */
    public function __construct($object)
    {
        $this->object = $object;
        $this->message = sprinf('Request should be a RequestInterface %s given', get_class($this->object));
    }
}