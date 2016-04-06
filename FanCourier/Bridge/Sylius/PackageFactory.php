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

namespace Konekt\Courier\FanCourier\Bridge\Sylius;

use Artkonekt\SyliusShippingBundle\Component\Core\Model\Shipment;
use Konekt\Courier\FanCourier\Model\Package;
use Sylius\Component\Addressing\Provider\ProvinceNamingProviderInterface;

class PackageFactory
{
    /**
     * @var ProvinceNamingProviderInterface
     */
    protected $provinceNamingProvider;

    /**
     * PackageFactory constructor.
     *
     * @param ProvinceNamingProviderInterface $provinceNamingProvider
     */
    public function __construct(ProvinceNamingProviderInterface $provinceNamingProvider)
    {
        $this->provinceNamingProvider = $provinceNamingProvider;
    }
    /**
     * @param Shipment $shipment
     *
     * @return Package
     */
    public function create(Shipment $shipment)
    {
        $package = new Package();

        $order = $shipment->getOrder();

        $package->observatii = $order->getAdditionalInformation();

        $package->continut = "Comanda nr. " . $order->getNumber();

        $shippingAddress = $order->getShippingAddress();

        $paymentMethod = $order->getPayments()[0]->getMethod();

        if ($paymentMethod->getName() == 'Numerar') {
            $package->ramburs = $order->getTotal() / 100;
            $package->tip = "cont colector";
        } else {
            $package->tip = "standard";
        }

        $package->plata_ramburs_la = 'expeditor';

        $billingAddress = $order->getBillingAddress();

        $billingName = $billingAddress->getFirstName();
        $billingCompany = $billingAddress->getCompany();

        $receiverName = $billingCompany ? $billingCompany : $billingName;
        $package->nume_destinatar = $receiverName;

        $fullName = $shippingAddress->getFirstName();
        $package->persoana_contact = $fullName;
        $package->telefon = $shippingAddress->getPhoneNumber();

        //should be refactored, use Sylius\Component\Addressing\Provider\ProvinceNamingProvider

        if ($shippingAddress->getProvinceCode()) {
            $package->judet = $this->provinceNamingProvider->getName($shippingAddress->getProvinceCode());
        }

        $package->localitate = $shippingAddress->getCity();

        $package->strada = $shippingAddress->getStreet();

        return $package;
    }
}