<?php
/**
 * Contains interface CommandFactoryInterface
 *
 * @package     Konekt\Courier\Common
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\Common;

/**
 * Interface for all command factories.
 */
interface CommandFactoryInterface
{
    /**
     * Creates a command which handles the request.
     *
     * @param RequestInterface $request
     *
     * @return CommandInterface
     */
    public function createCommand(RequestInterface $request);
}