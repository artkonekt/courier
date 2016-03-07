<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ArrivingPackage
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var PackageStatus $CurrentStatus
     */
    protected $CurrentStatus = null;

    /**
     * @var string $CustomerAddress
     */
    protected $CustomerAddress = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var boolean $IsDamaged
     */
    protected $IsDamaged = null;

    /**
     * @var float $PackageValue
     */
    protected $PackageValue = null;

    /**
     * @var string $PartnerBarcode
     */
    protected $PartnerBarcode = null;

    /**
     * @var \DateTime $StatusDateTime
     */
    protected $StatusDateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return PackageStatus
     */
    public function getCurrentStatus()
    {
      return $this->CurrentStatus;
    }

    /**
     * @param PackageStatus $CurrentStatus
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setCurrentStatus($CurrentStatus)
    {
      $this->CurrentStatus = $CurrentStatus;
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setCustomerAddress($CustomerAddress)
    {
      $this->CustomerAddress = $CustomerAddress;
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDamaged()
    {
      return $this->IsDamaged;
    }

    /**
     * @param boolean $IsDamaged
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setIsDamaged($IsDamaged)
    {
      $this->IsDamaged = $IsDamaged;
      return $this;
    }

    /**
     * @return float
     */
    public function getPackageValue()
    {
      return $this->PackageValue;
    }

    /**
     * @param float $PackageValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setPackageValue($PackageValue)
    {
      $this->PackageValue = $PackageValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerBarcode()
    {
      return $this->PartnerBarcode;
    }

    /**
     * @param string $PartnerBarcode
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setPartnerBarcode($PartnerBarcode)
    {
      $this->PartnerBarcode = $PartnerBarcode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStatusDateTime()
    {
      if ($this->StatusDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StatusDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StatusDateTime
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrivingPackage
     */
    public function setStatusDateTime(\DateTime $StatusDateTime = null)
    {
      if ($StatusDateTime == null) {
       $this->StatusDateTime = null;
      } else {
        $this->StatusDateTime = $StatusDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
