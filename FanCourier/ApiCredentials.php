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

/**
 * Class abstracting the credentials needed by the FanCourier API.
 */
class ApiCredentials
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $clientId;

    /**
     * ApiCredentials constructor.
     *
     * @param string $username
     * @param string $password
     * @param string $clientId
     */
    public function __construct($username, $password, $clientId)
    {
        $this->username = $username;
        $this->password = $password;
        $this->clientId = $clientId;
    }

    /**
     * Returns the username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the client ID.
     *
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}