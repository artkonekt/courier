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
 * Class AbstractCommand
 *
 * @package Konekt\Courier\FanCourier
 */
abstract class AbstractCommand implements CommandInterface
{
    /**
     * @var \Konekt\Courier\FanCourier\ApiCredentials
     */
    protected $credentials;

    /**
     * AbstractCommand constructor.
     *
     * @param \Konekt\Courier\FanCourier\ApiCredentials $credentials
     */
    public function __construct(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
    }

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