<?php
/**
 * Contains class AwbToHtmlCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction\AwbToHtml;

use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Sprinter\PartnerToPudo\Transaction\AbstractCommand;

/**
 * Command class dealing with the AWB label generation in HTML format.
 */
class AwbToHtmlCommand extends AbstractCommand
{
    /**
     * Creates an HTML label of the specified AWB with the help of the fanCourier library and returns the response.
     *
     * @param RequestInterface $request
     *
     * @return AwbToHtmlResponse
     */
    public function handle(RequestInterface $request)
    {
        $html = '<html><body>Teszt Sprinter Cimke</body></html>';

        return new AwbToHtmlResponse($html);
    }
}