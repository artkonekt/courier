<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class PartnerPudoService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfPackage' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfPackage',
      'Package' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\Package',
      'ArrayOfPackageResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfPackageResult',
      'PackageResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\PackageResult',
      'ArrayOfPackageShopPickup' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfPackageShopPickup',
      'PackageShopPickup' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\PackageShopPickup',
      'ArrayOfA2CPackage' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfA2CPackage',
      'A2CPackage' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\A2CPackage',
      'ArrayOfA2CPackageResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfA2CPackageResult',
      'A2CPackageResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\A2CPackageResult',
      'ArrayOfParcel' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfParcel',
      'Parcel' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\Parcel',
      'ArrayOfParcelResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfParcelResult',
      'ParcelResult' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ParcelResult',
      'ArrayOfC2CPackage' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfC2CPackage',
      'C2CPackage' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\C2CPackage',
      'ArrayOfC2CPackageShopPickup' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfC2CPackageShopPickup',
      'C2CPackageShopPickup' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\C2CPackageShopPickup',
      'ArrayOfParcelInternational' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfParcelInternational',
      'ParcelInternational' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ParcelInternational',
      'ArrayOfParcelResultInternational' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ArrayOfParcelResultInternational',
      'ParcelResultInternational' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\ParcelResultInternational',
      'RegisterShipmentRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShipmentRequest',
      'RegisterShipmentResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShipmentResponse',
      'RegisterShopShipmentRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShopShipmentRequest',
      'RegisterShopShipmentResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShopShipmentResponse',
      'RegisterA2CShipmentRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterA2CShipmentRequest',
      'RegisterA2CShipmentResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterA2CShipmentResponse',
      'RegisterParcelContainerRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterParcelContainerRequest',
      'RegisterParcelContainerResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterParcelContainerResponse',
      'RegisterC2CShipmentRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShipmentRequest',
      'RegisterC2CShipmentResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShipmentResponse',
      'RegisterC2CShopShipmentRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShopShipmentRequest',
      'RegisterC2CShopShipmentResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShopShipmentResponse',
      'RegisterReturningPackagesRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterReturningPackagesRequest',
      'RegisterReturningPackagesResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterReturningPackagesResponse',
      'UpdatePackagePriceAtCustomerDeliveryRequest' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\UpdatePackagePriceAtCustomerDeliveryRequest',
      'UpdatePackagePriceAtCustomerDeliveryResponse' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\UpdatePackagePriceAtCustomerDeliveryResponse',
      'RegisterShipment' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShipment',
      'RegisterShopShipment' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterShopShipment',
      'RegisterA2CShipment' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterA2CShipment',
      'RegisterParcelContainer' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterParcelContainer',
      'RegisterC2CShipment' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShipment',
      'RegisterC2CShopShipment' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterC2CShopShipment',
      'RegisterReturningPackages' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\RegisterReturningPackages',
      'UpdatePackagePriceAtCustomerDelivery' => 'Konekt\\Courier\\Sprinter\\PartnerToPudo\\Component\\UpdatePackagePriceAtCustomerDelivery',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/home/flajos/Documents/work/artkonekt/mobexpert-outlet/src/SprinterBundle/Controller/../sprinter_lib/partnerpudo/Wsdl/lapker.pudo.pudoservice.interface.partnerpudo.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param RegisterShipment $parameters
     * @return RegisterShipmentResponse
     */
    public function RegisterShipment(RegisterShipment $parameters)
    {
      return $this->__soapCall('RegisterShipment', array($parameters));
    }

    /**
     * @param RegisterShopShipment $parameters
     * @return RegisterShopShipmentResponse
     */
    public function RegisterShopShipment(RegisterShopShipment $parameters)
    {
      return $this->__soapCall('RegisterShopShipment', array($parameters));
    }

    /**
     * @param RegisterA2CShipment $parameters
     * @return RegisterA2CShipmentResponse
     */
    public function RegisterA2CShipment(RegisterA2CShipment $parameters)
    {
      return $this->__soapCall('RegisterA2CShipment', array($parameters));
    }

    /**
     * @param RegisterParcelContainer $parameters
     * @return RegisterParcelContainerResponse
     */
    public function RegisterParcelContainer(RegisterParcelContainer $parameters)
    {
      return $this->__soapCall('RegisterParcelContainer', array($parameters));
    }

    /**
     * @param RegisterC2CShipment $parameters
     * @return RegisterC2CShipmentResponse
     */
    public function RegisterC2CShipment(RegisterC2CShipment $parameters)
    {
      return $this->__soapCall('RegisterC2CShipment', array($parameters));
    }

    /**
     * @param RegisterC2CShopShipment $parameters
     * @return RegisterC2CShopShipmentResponse
     */
    public function RegisterC2CShopShipment(RegisterC2CShopShipment $parameters)
    {
      return $this->__soapCall('RegisterC2CShopShipment', array($parameters));
    }

    /**
     * @param RegisterReturningPackages $parameters
     * @return RegisterReturningPackagesResponse
     */
    public function RegisterReturningPackages(RegisterReturningPackages $parameters)
    {
      return $this->__soapCall('RegisterReturningPackages', array($parameters));
    }

    /**
     * @param UpdatePackagePriceAtCustomerDelivery $parameters
     * @return UpdatePackagePriceAtCustomerDeliveryResponse
     */
    public function UpdatePackagePriceAtCustomerDelivery(UpdatePackagePriceAtCustomerDelivery $parameters)
    {
      return $this->__soapCall('UpdatePackagePriceAtCustomerDelivery', array($parameters));
    }

}
