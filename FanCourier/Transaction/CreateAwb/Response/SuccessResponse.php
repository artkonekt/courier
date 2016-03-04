<?php
/**
 * Contains class CreateAwbResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb\Response;

use Exception;
use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB creation success response.
 */
class SuccessResponse extends AbstractResponse
{
    /**
     * @var string
     */
    protected $awbNumber;

    /**
     * @var string
     */
    private $price;

    /**
     * CreateAwbErrorResponse constructor.
     *
     * @param $lineNumber
     * @param $awbNumber
     * @param $price
     */
    public function __construct($lineNumber, $awbNumber, $price)
    {
        $this->lineNumber = $lineNumber;
        $this->awbNumber = $awbNumber;
        $this->price = $price;
    }

    /**
     * Returns whether the response is a successful one.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }

    /**
     * Returns the created AWB number.
     *
     * @return string
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * Returns the price of the package delivery.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}