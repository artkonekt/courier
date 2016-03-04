<?php
/**
 * Contains class AwbHtmlCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbHtml;

use FanCourier\fanCourier;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Transaction\AbstractCommand;

class AwbHtmlCommand extends AbstractCommand
{
    public function handle(RequestInterface $request)
    {
        $params = $this->getAuthParams();
        $params['nr'] = $request->getAwbNumber();

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('printAwb');

        //HTML
        $params['type'] = $request->getType();
        $endpoint->setParams($params);

        return new AwbHtmlResponse($endpoint->getResult());
    }
}