<?php
/**
 * Contains class ApiCredentials
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-05
 * @version     2016-07-05
 */

namespace Konekt\Courier\Dpd;

/**
 * Class abstracting the credentials needed by the Dpd API.
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
     * ApiCredentials constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
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
}