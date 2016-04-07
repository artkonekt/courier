<?php
/**
 * Contains class CommandFactory
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction;


use Konekt\Courier\Common\CommandFactoryInterface;
use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Sprinter\Model\Configuration;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\AwbToHtml\AwbToHtmlCommand;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\AwbToHtml\AwbToHtmlRequest;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel\RegisterParcelCommand;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel\RegisterParcelRequest;

class CommandFactory implements CommandFactoryInterface
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
     * Creates the command which handles the request.
     *
     * @param RequestInterface $request
     *
     * @return CommandInterface
     */
    public function createCommand(RequestInterface $request)
    {
        if ($request instanceof RegisterParcelRequest) {
            $command = new RegisterParcelCommand($this->configuration);
        } elseif ($request instanceof AwbToHtmlRequest) {
            $command = new AwbToHtmlCommand($this->configuration);
        }

        return $command;
    }
}