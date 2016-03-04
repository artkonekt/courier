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


use Konekt\Courier\Common\CommandFactoryInterface;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\ApiCredentials;
use Konekt\Courier\FanCourier\Transaction\AwbHtml\AwbHtmlCommand;
use Konekt\Courier\FanCourier\Transaction\AwbHtml\AwbHtmlRequest;
use Konekt\Courier\FanCourier\Transaction\AwbPdf\AwbPdfCommand;
use Konekt\Courier\FanCourier\Transaction\AwbPdf\AwbPdfRequest;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbCommand;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\CreateAwbRequest;

class CommandFactory implements CommandFactoryInterface
{
    private $apiCredentials;

    /**
     * CommandFactory constructor.
     *
     * @param $apiCredentials
     */
    public function __construct(ApiCredentials $apiCredentials)
    {
        $this->apiCredentials = $apiCredentials;
    }


    public function createCommand(RequestInterface $request)
    {
        if ($request instanceof AwbPdfRequest) {
            $command = new AwbPdfCommand($this->apiCredentials);
        } elseif ($request instanceof CreateAwbRequest) {
            $command = new CreateAwbCommand($this->apiCredentials);
        } elseif ($request instanceof AwbHtmlRequest) {
            $command = new AwbHtmlCommand($this->apiCredentials);
        }

        return $command;
    }
}