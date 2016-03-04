<?php
/**
 * Contains class CreateAwbRequest
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb;

use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Package;

/**
 * Request class abstracting the awb creation request.
 */
class CreateAwbRequest implements RequestInterface
{
    /**
     * @var Package
     */
    private $package;

    /**
     * CreateAwbRequest constructor.
     *
     * @param Package $package
     */
    public function __construct(Package $package)
    {
        $this->package = $package;
    }

    /**
     * Returns the package object based for which the AWB should be created.
     *
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }
}