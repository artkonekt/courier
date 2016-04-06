<?php
/**
 * Contains class PackagePopulator
 *
 * @package     AppBundle
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\Sprinter\Bridge\Sylius;

use Artkonekt\SyliusShippingBundle\Component\Core\Model\Shipment;
use Konekt\Courier\Sprinter\Model\Package;
use Sylius\Component\Core\Model\Address;

class PackageFactory
{
    /**
     * @param Shipment $shipment
     *
     * @return Package
     */
    public function create(Shipment $shipment)
    {
        $package = new Package();

        $order = $shipment->getOrder();

        /** @var Address $shippingAddress */
        $shippingAddress = $order->getShippingAddress();
        $carrierDetails = $shipment->getCarrierShipmentDetails();

        $package->customerName = $shippingAddress->getFullName();
        $package->customerPostalCode = $shippingAddress->getPostcode();
        $package->customerCity = $shippingAddress->getCity();
        $package->customerAddress = $shippingAddress->getStreet();
        $package->customerPhone = $shippingAddress->getPhoneNumber();
        $package->customerEmail = $shippingAddress->getCustomer()->getEmail();
        $package->packagePrice = ($order->getTotal() / 100); //ez kell-e mindig
        $package->priceAtDelivery = ($order->getTotal() / 100); //?mi ez
        $package->destinationLocationId = $carrierDetails['code'];
        $package->isPartnerInvoiced = false; //??ez mi
        $package->packageType = 'Small'; //ez mi?

        //TODO: remove the comment section below after the system becomes stable
        //FOR REFERENCE, THESE WERE THE TEST DATA:
        //$simpleParcel->setCustomerName('Customer Name');
        //$simpleParcel->setCustomerPostalCode('1097');
        //$simpleParcel->setCustomerCity('Budapest');
        //$simpleParcel->setCustomerAddress('Táblás u. 32/a');
        //$simpleParcel->setCustomerPhone('+3613477300');
        //$simpleParcel->setCustomerEmail('customer@lapker.hu');
        //    //$simpleParcel->ParcelCount = 1;
        //$simpleParcel->setPackagePrice(900);
        //$simpleParcel->setPriceAtDelivery(1000);
        //
        //$simpleParcel->setRegisterDate(new \DateTime());
        //$simpleParcel->setTracking(true);
        //    //$simpleParcel->TransitTime = 0; // Default value
        //$simpleParcel->setDestinationLocationId('0000101117');//$request->getPackage()->posId); // ShopID//0000101117
        //$simpleParcel->setIsPartnerInvoiced(false);
        //$simpleParcel->setPackageType('Small');

        return $package;
    }
}