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

namespace Konekt\Courier\Dpd\Transaction;

use Exception;
use Konekt\Courier\Common\CommandFactoryInterface;
use Konekt\Courier\Common\CommandInterface;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Dpd\ApiCredentials;
use Konekt\Courier\Dpd\Transaction\CancelShipment\CancelShipmentCommand;
use Konekt\Courier\Dpd\Transaction\CancelShipment\CancelShipmentRequest;
use Konekt\Courier\Dpd\Transaction\CreateShipment\CreateShipmentCommand;
use Konekt\Courier\Dpd\Transaction\CreateShipment\CreateShipmentRequest;
use Konekt\Courier\Dpd\Transaction\FindSite\FindSiteCommand;
use Konekt\Courier\Dpd\Transaction\FindSite\FindSiteRequest;
use Konekt\Courier\Dpd\Transaction\PrintAwb\PrintCommand;
use Konekt\Courier\Dpd\Transaction\PrintAwb\PrintRequest;

/**
 * Class CommandFactory.
 *
 * Factory class for creating Dpd commands based on the received request.
 */
class CommandFactory implements CommandFactoryInterface
{
    /**
     * @var ApiCredentials
     */
    private $apiCredentials;

    /**
     * CommandFactory constructor.
     *
     * @param ApiCredentials $apiCredentials The Fancourier credential object
     */
    public function __construct(ApiCredentials $apiCredentials)
    {
        $this->apiCredentials = $apiCredentials;
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
        if ($request instanceof CreateShipmentRequest) {
            $command = new CreateShipmentCommand($this->apiCredentials);
        } elseif ($request instanceof CancelShipmentRequest) {
            $command = new CancelShipmentCommand($this->apiCredentials);
        } elseif ($request instanceof PrintRequest) {
            $command = new PrintCommand($this->apiCredentials);
        } elseif ($request instanceof FindSiteRequest) {
            $command = new FindSiteCommand($this->apiCredentials);
        } else {
            throw new Exception("No command matches request of type " . get_class($request));
        }

        return $command;
    }
}