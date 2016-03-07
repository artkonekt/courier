<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class C2CPackage
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
     * @var float $PriceAtDelivery
     */
    protected $PriceAtDelivery = null;

    /**
     * @var string $ShopId
     */
    protected $ShopId = null;

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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
     */
    public function setCustomerType($CustomerType)
    {
      $this->CustomerType = $CustomerType;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
     */
    public function setPackageWeight($PackageWeight)
    {
      $this->PackageWeight = $PackageWeight;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
     */
    public function setPriceAtDelivery($PriceAtDelivery)
    {
      $this->PriceAtDelivery = $PriceAtDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param string $ShopId
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\C2CPackage
     */
    public function setTracking($Tracking)
    {
      $this->Tracking = $Tracking;
      return $this;
    }

}
