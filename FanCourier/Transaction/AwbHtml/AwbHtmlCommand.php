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

/**
 * Command class dealing with the AWB label generation in HTML format.
 */
class AwbHtmlCommand extends AbstractCommand
{
    /**
     * Creates an HTML label of the specified AWB with the help of the fanCourier library and returns the response.
     *
     * @param RequestInterface $request
     *
     * @return AwbHtmlResponse
     */
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