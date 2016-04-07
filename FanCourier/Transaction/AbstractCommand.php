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
use Konekt\Courier\FanCourier\Model\Configuration;

/**
 * Class AbstractCommand providing common data and functionality for all Fancourier commands.
 *
 * @package Konekt\Courier\FanCourier
 */
abstract class AbstractCommand implements CommandInterface
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * AbstractCommand constructor.
     *
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Turns the credentials object into a format needed by the Fancourier API.
     *
     * @return array
     */
    protected function getAuthParams()
    {
        $configuration = $this->configuration;

        $params = [
            'username' => $configuration->getUsername(),
            'user_pass' => $configuration->getPassword(),
            'client_id' => $configuration->getClientId(),
        ];

        return $params;
    }
}