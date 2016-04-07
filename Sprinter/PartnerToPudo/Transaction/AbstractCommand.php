<?php
/**
 * Contains class AbstractCommand
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction;


use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\Sprinter\Model\Configuration;

abstract class AbstractCommand implements CommandInterface
{
    protected $configuration;

    /**
     * AbstractCommand constructor.
     *
     * @param $configuration
     */
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}