<?php
/**
 * Contains class AbstractCommand
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-05
 * @version     2018-07-05
 */

namespace Konekt\Courier\Dpd\Transaction;

use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\Dpd\ApiCredentials;

/**
 * Class AbstractCommand providing common data and functionality for all Dpd commands.
 *
 * @package Konekt\Courier\Dpd
 */
abstract class AbstractCommand implements CommandInterface
{
    /**
     * @var ApiCredentials
     */
    protected $credentials;

    /**
     * AbstractCommand constructor.
     *
     * @param ApiCredentials $credentials
     */
    public function __construct(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Turns the credentials object into a format needed by the Dpd API.
     *
     * @return array
     */
    protected function getAuthParams()
    {
        $credentials = $this->credentials;

        $params = [
            'userName' => $credentials->getUsername(),
            'password' => $credentials->getPassword(),
        ];

        return $params;
    }
}