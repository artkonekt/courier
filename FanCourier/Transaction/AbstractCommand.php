<?php
/**
 * Contains class AbstractCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier\Transaction;

use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\FanCourier\ApiCredentials;

/**
 * Class AbstractCommand providing common data and functionality for all Fancourier commands.
 *
 * @package Konekt\Courier\FanCourier
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
     * Turns the credentials object into a format needed by the Fancourier API.
     *
     * @return array
     */
    protected function getAuthParams()
    {
        $credentials = $this->credentials;

        $params = [
            'username' => $credentials->getUsername(),
            'user_pass' => $credentials->getPassword(),
            'client_id' => $credentials->getClientId(),
        ];

        return $params;
    }
}