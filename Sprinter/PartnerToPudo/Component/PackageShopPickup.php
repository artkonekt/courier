<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class PackageShopPickup
{

    /**
     * @var string $AutorizationCode
     */
    protected $AutorizationCode = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var string $CustomerAddress
     */
    protected $CustomerAddress = null;

    /**
     * @var string $CustomerEmail
     */
    protected $CustomerEmail = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $CustomerPhone
     */
    protected $CustomerPhone = null;

    /**
     * @var CustomerType $CustomerType
     */
    protected $CustomerType = null;

    /**
     * @var string $DestinationLocationId
     */
    protected $DestinationLocationId = null;

    /**
     * @var string $OriginalBarCode
     */
    protected $OriginalBarCode = null;

    /**
     * @var float $PackagePrice
     */
    protected $PackagePrice = null;

    /**
     * @var float $PackageSizeX
     */
    protected $PackageSizeX = null;

    /**
     * @var float $PackageSizeY
     */
    protected $PackageSizeY = null;

    /**
     * @var float $PackageSizeZ
     */
    protected $PackageSizeZ = null;

    /**
     * @var PackageType $PackageType
     */
    protected $PackageType = null;

    /**
     * @var float $PackageVolume
     */
    protected $PackageVolume = null;

    /**
     * @var float $PackageWeight
     */
    protected $PackageWeight = null;

    /**
     * @var string $PickupCustomerName
     */
    protected $PickupCustomerName = null;

    /**
     * @var string $PickupLocationId
     */
    protected $PickupLocationId = null;

    /**
     * @var string $PickupNotificationEmailAddress
     */
    protected $PickupNotificationEmailAddress = null;

    /**
     * @var string $PickupNotificationPhone
     */
    protected $PickupNotificationPhone = null;

    /**
     * @var float $PriceAtDelivery
     */
    protected $PriceAtDelivery = null;

    /**
     * @var boolean $Tracking
     */
    protected $Tracking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAutorizationCode()
    {
      return $this->AutorizationCode;
    }

    /**
     * @param string $AutorizationCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setAutorizationCode($AutorizationCode)
    {
      $this->AutorizationCode = $AutorizationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAddress()
    {
      return $this->CustomerAddress;
    }

    /**
     * @param string $CustomerAddress
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setCustomerAddress($CustomerAddress)
    {
      $this->CustomerAddress = $CustomerAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
      return $this->CustomerEmail;
    }

    /**
     * @param string $CustomerEmail
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setCustomerEmail($CustomerEmail)
    {
      $this->CustomerEmail = $CustomerEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone()
    {
      return $this->CustomerPhone;
    }

    /**
     * @param string $CustomerPhone
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setCustomerPhone($CustomerPhone)
    {
      $this->CustomerPhone = $CustomerPhone;
      return $this;
    }

    /**
     * @return CustomerType
     */
    public function getCustomerType()
    {
      return $this->CustomerType;
    }

    /**
     * @param CustomerType $CustomerType
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setCustomerType($CustomerType)
    {
      $this->CustomerType = $CustomerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationLocationId()
    {
      return $this->DestinationLocationId;
    }

    /**
     * @param string $DestinationLocationId
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setDestinationLocationId($DestinationLocationId)
    {
      $this->DestinationLocationId = $DestinationLocationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalBarCode()
    {
      return $this->OriginalBarCode;
    }

    /**
     * @param string $OriginalBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setOriginalBarCode($OriginalBarCode)
    {
      $this->OriginalBarCode = $OriginalBarCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackagePrice()
    {
      return $this->PackagePrice;
    }

    /**
     * @param float $PackagePrice
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackagePrice($PackagePrice)
    {
      $this->PackagePrice = $PackagePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageSizeX()
    {
      return $this->PackageSizeX;
    }

    /**
     * @param float $PackageSizeX
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageSizeX($PackageSizeX)
    {
      $this->PackageSizeX = $PackageSizeX;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageSizeY()
    {
      return $this->PackageSizeY;
    }

    /**
     * @param float $PackageSizeY
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageSizeY($PackageSizeY)
    {
      $this->PackageSizeY = $PackageSizeY;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageSizeZ()
    {
      return $this->PackageSizeZ;
    }

    /**
     * @param float $PackageSizeZ
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageSizeZ($PackageSizeZ)
    {
      $this->PackageSizeZ = $PackageSizeZ;
      return $this;
    }

    /**
     * @return PackageType
     */
    public function getPackageType()
    {
      return $this->PackageType;
    }

    /**
     * @param PackageType $PackageType
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageType($PackageType)
    {
      $this->PackageType = $PackageType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageVolume()
    {
      return $this->PackageVolume;
    }

    /**
     * @param float $PackageVolume
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageVolume($PackageVolume)
    {
      $this->PackageVolume = $PackageVolume;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageWeight()
    {
      return $this->PackageWeight;
    }

    /**
     * @param float $PackageWeight
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPackageWeight($PackageWeight)
    {
      $this->PackageWeight = $PackageWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupCustomerName()
    {
      return $this->PickupCustomerName;
    }

    /**
     * @param string $PickupCustomerName
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPickupCustomerName($PickupCustomerName)
    {
      $this->PickupCustomerName = $PickupCustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationId()
    {
      return $this->PickupLocationId;
    }

    /**
     * @param string $PickupLocationId
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPickupLocationId($PickupLocationId)
    {
      $this->PickupLocationId = $PickupLocationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupNotificationEmailAddress()
    {
      return $this->PickupNotificationEmailAddress;
    }

    /**
     * @param string $PickupNotificationEmailAddress
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPickupNotificationEmailAddress($PickupNotificationEmailAddress)
    {
      $this->PickupNotificationEmailAddress = $PickupNotificationEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupNotificationPhone()
    {
      return $this->PickupNotificationPhone;
    }

    /**
     * @param string $PickupNotificationPhone
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPickupNotificationPhone($PickupNotificationPhone)
    {
      $this->PickupNotificationPhone = $PickupNotificationPhone;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceAtDelivery()
    {
      return $this->PriceAtDelivery;
    }

    /**
     * @param float $PriceAtDelivery
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setPriceAtDelivery($PriceAtDelivery)
    {
      $this->PriceAtDelivery = $PriceAtDelivery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTracking()
    {
      return $this->Tracking;
    }

    /**
     * @param boolean $Tracking
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageShopPickup
     */
    public function setTracking($Tracking)
    {
      $this->Tracking = $Tracking;
      return $this;
    }

}
