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
use Konekt\Courier\FanCourier\ApiCredentials;
use Konekt\Courier\FanCourier\Transaction\AwbToHtml\AwbToHtmlCommand;
use Konekt\Courier\FanCourier\Transaction\AwbToHtml\AwbToHtmlRequest;
use Konekt\Courier\FanCourier\Transaction\AwbToPdf\AwbToPdfCommand;
use Konekt\Courier\FanCourier\Transaction\AwbToPdf\AwbToPdfRequest;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbCommand;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbRequest;
use Konekt\Courier\FanCourier\Transaction\DeleteAwb\DeleteAwbCommand;
use Konekt\Courier\FanCourier\Transaction\DeleteAwb\DeleteAwbRequest;
use Konekt\Courier\FanCourier\Transaction\DeliveryDate\DeliveryDateCommand;
use Konekt\Courier\FanCourier\Transaction\DeliveryDate\DeliveryDateRequest;
use Konekt\Courier\FanCourier\Transaction\TrackPackage\TrackPackageCommand;
use Konekt\Courier\FanCourier\Transaction\TrackPackage\TrackPackageRequest;

/**
 * Class CommandFactory.
 *
 * Factory class for creating Fancourier commands based on the received request.
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
        if ($request instanceof AwbToPdfRequest) {
            $command = new AwbToPdfCommand($this->apiCredentials);
        } elseif ($request instanceof CreateAwbRequest) {
            $command = new CreateAwbCommand($this->apiCredentials);
        } elseif ($request instanceof AwbToHtmlRequest) {
            $command = new AwbToHtmlCommand($this->apiCredentials);
        } elseif ($request instanceof DeleteAwbRequest) {
            $command = new DeleteAwbCommand($this->apiCredentials);
        } elseif ($request instanceof TrackPackageRequest) {
            $command = new TrackPackageCommand($this->apiCredentials);
        } elseif ($request instanceof DeliveryDateRequest) {
            $command = new DeliveryDateCommand($this->apiCredentials);
        } else {
            throw new Exception("No command matches request of type " . get_class($request));
        }

        return $command;
    }
}