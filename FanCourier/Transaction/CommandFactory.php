<?php
/**
 * Contains class CommandFactory
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction;

use Exception;
use Konekt\Courier\Common\CommandFactoryInterface;
use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Model\Configuration;
use Konekt\Courier\FanCourier\Transaction\AwbToHtml\AwbToHtmlCommand;
use Konekt\Courier\FanCourier\Transaction\AwbToHtml\AwbToHtmlRequest;
use Konekt\Courier\FanCourier\Transaction\AwbToPdf\AwbToPdfCommand;
use Konekt\Courier\FanCourier\Transaction\AwbToPdf\AwbToPdfRequest;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbCommand;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbRequest;
use Konekt\Courier\FanCourier\Transaction\DeleteAwb\DeleteAwbCommand;
use Konekt\Courier\FanCourier\Transaction\DeleteAwb\DeleteAwbRequest;

/**
 * Class CommandFactory.
 *
 * Factory class for creating Fancourier commands based on the received request.
 */
class CommandFactory implements CommandFactoryInterface
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * CommandFactory constructor.
     *
     * @param Configuration $configuration The Fancourier credential object
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @inheritdoc
     *
     * @param RequestInterface $request
     *
     * @return CommandInterface
     */
    public function createCommand(RequestInterface $request)
    {
        if ($request instanceof AwbToPdfRequest) {
            $command = new AwbToPdfCommand($this->configuration);
        } elseif ($request instanceof CreateAwbRequest) {
            $command = new CreateAwbCommand($this->configuration);
        } elseif ($request instanceof AwbToHtmlRequest) {
            $command = new AwbToHtmlCommand($this->configuration);
        } elseif ($request instanceof DeleteAwbRequest) {
            $command = new DeleteAwbCommand($this->configuration);
        } else {
            throw new Exception("No command matches request of type " . get_class($request));
        }

        return $command;
    }
}