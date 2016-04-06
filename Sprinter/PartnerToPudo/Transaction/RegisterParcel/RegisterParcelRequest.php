<?php
/**
 * Contains class RegisterParcelRequest
 *
 * @package     Konekt\Courier\Sprinter\PartnerToPudo\Transaction
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-07
 * @version     2016-03-07
 */

namespace Konekt\Courier\Sprinter\PartnerToPudo\Transaction\RegisterParcel;


use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\Sprinter\Model\Package;

class RegisterParcelRequest implements  RequestInterface
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