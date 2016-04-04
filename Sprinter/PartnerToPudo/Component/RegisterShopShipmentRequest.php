<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterShopShipmentRequest
{

    /**
     * @var \DateTime $ArriveDate
     */
    protected $ArriveDate = null;

    /**
     * @var boolean $IsSupplementData
     */
    protected $IsSupplementData = null;

    /**
     * @var ArrayOfPackageShopPickup $Packages
     */
    protected $Packages = null;

    /**
     * @var string $PartnerAddress
     */
    protected $PartnerAddress = null;

    /**
     * @var string $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var string $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var Supplier $Supplier
     */
    protected $Supplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getArriveDate()
    {
      if ($this->ArriveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArriveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArriveDate
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setArriveDate(\DateTime $ArriveDate = null)
    {
      if ($ArriveDate == null) {
       $this->ArriveDate = null;
      } else {
        $this->ArriveDate = $ArriveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSupplementData()
    {
      return $this->IsSupplementData;
    }

    /**
     * @param boolean $IsSupplementData
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setIsSupplementData($IsSupplementData)
    {
      $this->IsSupplementData = $IsSupplementData;
      return $this;
    }

    /**
     * @return ArrayOfPackageShopPickup
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfPackageShopPickup $Packages
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerAddress()
    {
      return $this->PartnerAddress;
    }

    /**
     * @param string $PartnerAddress
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setPartnerAddress($PartnerAddress)
    {
      $this->PartnerAddress = $PartnerAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
      return $this->PartnerCode;
    }

    /**
     * @param string $PartnerCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param string $ShipmentId
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return Supplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param Supplier $Supplier
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentRequest
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

}