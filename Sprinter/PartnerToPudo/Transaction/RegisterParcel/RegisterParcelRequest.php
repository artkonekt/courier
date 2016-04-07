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
    const TYPE_HOMEDELIVERY = 1;

    const TYPE_PPP = 2;

    /**
     * @var Package
     */
    private $package;

    private $type;

    /**
     * CreateAwbRequest constructor.
     *
     * @param Package $package
     */
    public function __construct(Package $package, $type)
    {
        $this->package = $package;
        $this->type = $type;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}