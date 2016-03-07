<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class Parcel
{

    /**
     * @var \DateTime $AccountingDeadlineDate
     */
    protected $AccountingDeadlineDate = null;

    /**
     * @var string $AutorizationCode
     */
    protected $AutorizationCode = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $CustomerAddress
     */
    protected $CustomerAddress = null;

    /**
     * @var string $CustomerCity
     */
    protected $CustomerCity = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

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
     * @var string $CustomerPostalCode
     */
    protected $CustomerPostalCode = null;

    /**
     * @var CustomerType $CustomerType
     */
    protected $CustomerType = null;

    /**
     * @var float $DeliveryPrice
     */
    protected $DeliveryPrice = null;

    /**
     * @var string $DeliveryPriceCurrency
     */
    protected $DeliveryPriceCurrency = null;

    /**
     * @var ParcelDeliveryType $DeliveryType
     */
    protected $DeliveryType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DestinationLocationId
     */
    protected $DestinationLocationId = null;

    /**
     * @var string $DirectPackageBarCode
     */
    protected $DirectPackageBarCode = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var boolean $IsPartnerInvoiced
     */
    protected $IsPartnerInvoiced = null;

    /**
     * @var float $PackagePrice
     */
    protected $PackagePrice = null;

    /**
     * @var string $PackagePriceCurrency
     */
    protected $PackagePriceCurrency = null;

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
     * @var string $ParcelContentDescription1
     */
    protected $ParcelContentDescription1 = null;

    /**
     * @var string $ParcelContentDescription2
     */
    protected $ParcelContentDescription2 = null;

    /**
     * @var int $ParcelCount
     */
    protected $ParcelCount = null;

    /**
     * @var ParcelCreationStatus $ParcelCreationStatus
     */
    protected $ParcelCreationStatus = null;

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
     * @var string $ReferenceBarCode
     */
    protected $ReferenceBarCode = null;

    /**
     * @var \DateTime $RegisterDate
     */
    protected $RegisterDate = null;

    /**
     * @var boolean $ReturnOfDocument
     */
    protected $ReturnOfDocument = null;

    /**
     * @var ParcelServiceType $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $SupplimentJSONData
     */
    protected $SupplimentJSONData = null;

    /**
     * @var boolean $Tracking
     */
    protected $Tracking = null;

    /**
     * @var int $TransitTime
     */
    protected $TransitTime = null;

    /**
     * @param int $ParcelCount
     * @param ParcelServiceType $ServiceType
     * @param int $TransitTime
     */
    public function __construct($ParcelCount, $ServiceType, $TransitTime)
    {
      $this->ParcelCount = $ParcelCount;
      $this->ServiceType = $ServiceType;
      $this->TransitTime = $TransitTime;
    }

    /**
     * @return \DateTime
     */
    public function getAccountingDeadlineDate()
    {
      if ($this->AccountingDeadlineDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccountingDeadlineDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccountingDeadlineDate
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setAccountingDeadlineDate(\DateTime $AccountingDeadlineDate = null)
    {
      if ($AccountingDeadlineDate == null) {
       $this->AccountingDeadlineDate = null;
      } else {
        $this->AccountingDeadlineDate = $AccountingDeadlineDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerAddress($CustomerAddress)
    {
      $this->CustomerAddress = $CustomerAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCity()
    {
      return $this->CustomerCity;
    }

    /**
     * @param string $CustomerCity
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerCity($CustomerCity)
    {
      $this->CustomerCity = $CustomerCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerPhone($CustomerPhone)
    {
      $this->CustomerPhone = $CustomerPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPostalCode()
    {
      return $this->CustomerPostalCode;
    }

    /**
     * @param string $CustomerPostalCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerPostalCode($CustomerPostalCode)
    {
      $this->CustomerPostalCode = $CustomerPostalCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setCustomerType($CustomerType)
    {
      $this->CustomerType = $CustomerType;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPrice()
    {
      return $this->DeliveryPrice;
    }

    /**
     * @param float $DeliveryPrice
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDeliveryPrice($DeliveryPrice)
    {
      $this->DeliveryPrice = $DeliveryPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPriceCurrency()
    {
      return $this->DeliveryPriceCurrency;
    }

    /**
     * @param string $DeliveryPriceCurrency
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDeliveryPriceCurrency($DeliveryPriceCurrency)
    {
      $this->DeliveryPriceCurrency = $DeliveryPriceCurrency;
      return $this;
    }

    /**
     * @return ParcelDeliveryType
     */
    public function getDeliveryType()
    {
      return $this->DeliveryType;
    }

    /**
     * @param ParcelDeliveryType $DeliveryType
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDeliveryType($DeliveryType)
    {
      $this->DeliveryType = $DeliveryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDestinationLocationId($DestinationLocationId)
    {
      $this->DestinationLocationId = $DestinationLocationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectPackageBarCode()
    {
      return $this->DirectPackageBarCode;
    }

    /**
     * @param string $DirectPackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setDirectPackageBarCode($DirectPackageBarCode)
    {
      $this->DirectPackageBarCode = $DirectPackageBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartnerInvoiced()
    {
      return $this->IsPartnerInvoiced;
    }

    /**
     * @param boolean $IsPartnerInvoiced
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setIsPartnerInvoiced($IsPartnerInvoiced)
    {
      $this->IsPartnerInvoiced = $IsPartnerInvoiced;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setPackagePrice($PackagePrice)
    {
      $this->PackagePrice = $PackagePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackagePriceCurrency()
    {
      return $this->PackagePriceCurrency;
    }

    /**
     * @param string $PackagePriceCurrency
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setPackagePriceCurrency($PackagePriceCurrency)
    {
      $this->PackagePriceCurrency = $PackagePriceCurrency;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setPackageWeight($PackageWeight)
    {
      $this->PackageWeight = $PackageWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelContentDescription1()
    {
      return $this->ParcelContentDescription1;
    }

    /**
     * @param string $ParcelContentDescription1
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setParcelContentDescription1($ParcelContentDescription1)
    {
      $this->ParcelContentDescription1 = $ParcelContentDescription1;
      return $this;
    }

    /**
     * @return string
     */
    public function getParcelContentDescription2()
    {
      return $this->ParcelContentDescription2;
    }

    /**
     * @param string $ParcelContentDescription2
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setParcelContentDescription2($ParcelContentDescription2)
    {
      $this->ParcelContentDescription2 = $ParcelContentDescription2;
      return $this;
    }

    /**
     * @return int
     */
    public function getParcelCount()
    {
      return $this->ParcelCount;
    }

    /**
     * @param int $ParcelCount
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setParcelCount($ParcelCount)
    {
      $this->ParcelCount = $ParcelCount;
      return $this;
    }

    /**
     * @return ParcelCreationStatus
     */
    public function getParcelCreationStatus()
    {
      return $this->ParcelCreationStatus;
    }

    /**
     * @param ParcelCreationStatus $ParcelCreationStatus
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setParcelCreationStatus($ParcelCreationStatus)
    {
      $this->ParcelCreationStatus = $ParcelCreationStatus;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setPriceAtDelivery($PriceAtDelivery)
    {
      $this->PriceAtDelivery = $PriceAtDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceBarCode()
    {
      return $this->ReferenceBarCode;
    }

    /**
     * @param string $ReferenceBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setReferenceBarCode($ReferenceBarCode)
    {
      $this->ReferenceBarCode = $ReferenceBarCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegisterDate()
    {
      if ($this->RegisterDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RegisterDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RegisterDate
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setRegisterDate(\DateTime $RegisterDate = null)
    {
      if ($RegisterDate == null) {
       $this->RegisterDate = null;
      } else {
        $this->RegisterDate = $RegisterDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnOfDocument()
    {
      return $this->ReturnOfDocument;
    }

    /**
     * @param boolean $ReturnOfDocument
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setReturnOfDocument($ReturnOfDocument)
    {
      $this->ReturnOfDocument = $ReturnOfDocument;
      return $this;
    }

    /**
     * @return ParcelServiceType
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ParcelServiceType $ServiceType
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplimentJSONData()
    {
      return $this->SupplimentJSONData;
    }

    /**
     * @param string $SupplimentJSONData
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setSupplimentJSONData($SupplimentJSONData)
    {
      $this->SupplimentJSONData = $SupplimentJSONData;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setTracking($Tracking)
    {
      $this->Tracking = $Tracking;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransitTime()
    {
      return $this->TransitTime;
    }

    /**
     * @param int $TransitTime
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\Parcel
     */
    public function setTransitTime($TransitTime)
    {
      $this->TransitTime = $TransitTime;
      return $this;
    }

}
