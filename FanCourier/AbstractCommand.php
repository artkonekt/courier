<?php
/**
 * Contains class AbstractCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;


class AbstractCommand
{
    private $credentials;

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