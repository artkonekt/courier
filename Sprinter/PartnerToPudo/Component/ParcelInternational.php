<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ParcelInternational
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
     * @var string $CustomerCountryCode
     */
    protected $CustomerCountryCode = null;

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
     * @var string $CustomerRegion
     */
    protected $CustomerRegion = null;

    /**
     * @var string $DeliveryPartner
     */
    protected $DeliveryPartner = null;

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
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var boolean $IsDocument
     */
    protected $IsDocument = null;

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
     * @var float $PriceAtDelivery
     */
    protected $PriceAtDelivery = null;

    /**
     * @var string $PriceAtDeliveryCurrency
     */
    protected $PriceAtDeliveryCurrency = null;

    /**
     * @var \DateTime $RegisterDate
     */
    protected $RegisterDate = null;

    /**
     * @var boolean $ReturnOfDocument
     */
    protected $ReturnOfDocument = null;

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
     */
    public function __construct($ParcelCount)
    {
      $this->ParcelCount = $ParcelCount;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountryCode()
    {
      return $this->CustomerCountryCode;
    }

    /**
     * @param string $CustomerCountryCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setCustomerCountryCode($CustomerCountryCode)
    {
      $this->CustomerCountryCode = $CustomerCountryCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setCustomerPostalCode($CustomerPostalCode)
    {
      $this->CustomerPostalCode = $CustomerPostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerRegion()
    {
      return $this->CustomerRegion;
    }

    /**
     * @param string $CustomerRegion
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setCustomerRegion($CustomerRegion)
    {
      $this->CustomerRegion = $CustomerRegion;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPartner()
    {
      return $this->DeliveryPartner;
    }

    /**
     * @param string $DeliveryPartner
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setDeliveryPartner($DeliveryPartner)
    {
      $this->DeliveryPartner = $DeliveryPartner;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDocument()
    {
      return $this->IsDocument;
    }

    /**
     * @param boolean $IsDocument
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setIsDocument($IsDocument)
    {
      $this->IsDocument = $IsDocument;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setParcelCount($ParcelCount)
    {
      $this->ParcelCount = $ParcelCount;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setPriceAtDelivery($PriceAtDelivery)
    {
      $this->PriceAtDelivery = $PriceAtDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceAtDeliveryCurrency()
    {
      return $this->PriceAtDeliveryCurrency;
    }

    /**
     * @param string $PriceAtDeliveryCurrency
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setPriceAtDeliveryCurrency($PriceAtDeliveryCurrency)
    {
      $this->PriceAtDeliveryCurrency = $PriceAtDeliveryCurrency;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setReturnOfDocument($ReturnOfDocument)
    {
      $this->ReturnOfDocument = $ReturnOfDocument;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelInternational
     */
    public function setTransitTime($TransitTime)
    {
      $this->TransitTime = $TransitTime;
      return $this;
    }

}
