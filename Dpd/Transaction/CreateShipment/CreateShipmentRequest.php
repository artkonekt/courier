<?php
/**
 * Contains class CreateShipmentRequest
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-04
 * @version     2018-07-04
 */

namespace Konekt\Courier\Dpd\Transaction\CreateShipment;

use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Dpd\Package;

/**
 * Request class abstracting the awb creation request.
 */
class CreateShipmentRequest implements RequestInterface
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