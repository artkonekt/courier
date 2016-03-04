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
use Konekt\Courier\FanCourier\Transaction\AwbHtml\AwbHtmlCommand;
use Konekt\Courier\FanCourier\Transaction\AwbHtml\AwbHtmlRequest;
use Konekt\Courier\FanCourier\Transaction\AwbPdf\AwbPdfCommand;
use Konekt\Courier\FanCourier\Transaction\AwbPdf\AwbPdfRequest;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbCommand;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbRequest;

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
        if ($request instanceof AwbPdfRequest) {
            $command = new AwbPdfCommand($this->apiCredentials);
        } elseif ($request instanceof CreateAwbRequest) {
            $command = new CreateAwbCommand($this->apiCredentials);
        } elseif ($request instanceof AwbHtmlRequest) {
            $command = new AwbHtmlCommand($this->apiCredentials);
        } else {
            throw new Exception("No command matches request of type " . get_class($request));
        }

        return $command;
    }
}