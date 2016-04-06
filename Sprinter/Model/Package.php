<?php
/**
 * Contains class Package
 *
 * @package     Konekt\Courier\Sprinter\Model
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-05
 * @version     2016-04-05
 */

namespace Konekt\Courier\Sprinter\Model;


class Package
{
    public $customerName;

    public $customerPostalCode;

    public $customerCity;

    public $customerAddress;

    public $customerPhone;

    public $customerEmail;

    public $packagePrice;

    public $priceAtDelivery;

    public $destinationLocationId;

    public $isPartnerInvoiced;

    public $packageType;
}