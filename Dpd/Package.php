<?php
/**
 * Contains class Package
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-02-24
 * @version     2016-02-24
 */

namespace Konekt\Courier\Dpd;

/**
 * Class Package abstracting package data needed for AWB creation.
 */
class Package
{
    // Recipient
    public $recipient_phone1_number;
    public $recipient_privatePerson;
    public $recipient_clientName;
    public $recipient_contactName;
    public $recipient_email;
    public $recipient_address_siteName;
    public $recipient_address_streetName;

    // Service
    public $service_pickupDate;
    public $service_serviceId;
    public $service_additionalServices_declaredValue_amount;

    // Content
    public $content_parcelsCount;
    public $content_totalWeight;
    public $content_contents = "FURNITURE";
    public $content_package = "BOX";

    // Other
    public $shipmentNote;
    public $ref1;
}