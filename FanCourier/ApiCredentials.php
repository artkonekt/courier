<?php
/**
 * Contains class ApiCredentials
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;


class ApiCredentials
{
    private $username;

    private $password;

    private $clientId;

    /**
     * ApiCredentials constructor.
     *
     * @param $username
     * @param $password
     * @param $clientId
     */
    public function __construct($username, $password, $clientId)
    {
        $this->username = $username;
        $this->password = $password;
        $this->clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}