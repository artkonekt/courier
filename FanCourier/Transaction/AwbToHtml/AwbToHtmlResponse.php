<?php
/**
 * Contains class AwbToHtmlResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbToHtml;

use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB HTML label creation response.
 */
class AwbToHtmlResponse implements ResponseInterface
{
    /**
     * @var string
     */
    private $response;

    /**
     * AwbToHtmlResponse constructor.
     *
     * @param string $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Returns the HTML.
     *
     * @return mixed
     */
    public function getHtml()
    {
        return $this->response;
    }
}