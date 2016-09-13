<?php
/**
 * Contains class DeleteAwbRequest
 *
 * @package     Konekt\Courier\FanCourier\Transaction\DeleteAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\TrackPackage;

use Konekt\Courier\Common\RequestInterface;

/**
 * Request class abstracting the AWB deletion request.
 */
class TrackPackageRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $awbNumber;

    /**
     * AwbToPdfRequest constructor.
     *
     * @param string $awbNumber
     */
    public function __construct($awbNumber)
    {
        $this->awbNumber = $awbNumber;
    }

    /**
     * Returns the number of the AWB.
     *
     * @return string
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }
}