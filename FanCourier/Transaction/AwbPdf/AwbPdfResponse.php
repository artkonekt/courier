<?php
/**
 * Contains class AwbPdfResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbPdf;

use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB PDF label creation response.
 */
class AwbPdfResponse implements ResponseInterface
{
    /**
     * @var string
     */
    private $response;

    /**
     * AwbPdfResponse constructor.
     *
     * @param string $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Returns the PDF.
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->response;
    }
}