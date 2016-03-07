<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterParcelContainerRequest
{

    /**
     * @var \DateTime $ArriveDate
     */
    protected $ArriveDate = null;

    /**
     * @var ArrayOfParcel $ParcelContainer
     */
    protected $ParcelContainer = null;

    /**
     * @var string $PartnerAddress
     */
    protected $PartnerAddress = null;

    /**
     * @var string $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var Supplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $SupplimentJSONData
     */
    protected $SupplimentJSONData = null;

    /**
     * @param Supplier $Supplier
     */
    public function __construct($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
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
     * @return ArrayOfParcel
     */
    public function getParcelContainer()
    {
      return $this->ParcelContainer;
    }

    /**
     * @param ArrayOfParcel $ParcelContainer
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
     */
    public function setParcelContainer($ParcelContainer)
    {
      $this->ParcelContainer = $ParcelContainer;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerRequest
     */
    public function setSupplimentJSONData($SupplimentJSONData)
    {
      $this->SupplimentJSONData = $SupplimentJSONData;
      return $this;
    }

}
