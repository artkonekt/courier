<?php
/**
 * Contains class AwbPdfCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbPdf;

use FanCourier\fanCourier;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Transaction\AbstractCommand;

/**
 * Command class dealing with the AWB label generation in PDF format.
 */
class AwbPdfCommand extends AbstractCommand
{
    /**
     * Creates an PDF label of the specified AWB with the help of the fanCourier library and returns the response.
     *
     * @param RequestInterface $request
     *
     * @return AwbPdfResponse
     */
    public function handle(RequestInterface $request)
    {
        $params = $this->getAuthParams();
        $params['nr'] = $request->getAwbNumber();

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('printAwb');

        //PDF
        $endpoint->setType('pdf');
        $params['page'] = $request->getPage(); // Optional -> Pdf page type: A4,A5,A6
        $params['type'] = $request->getType(); // Optional -> 0 or 1, if page A6 type=1
        $endpoint->setParams($params);

        return new AwbPdfResponse($endpoint->getResult());
    }
}