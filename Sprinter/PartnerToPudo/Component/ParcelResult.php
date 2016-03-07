<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ParcelResult
{

    /**
     * @var string $DirectionNumber
     */
    protected $DirectionNumber = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var boolean $IsDelayedDelivery
     */
    protected $IsDelayedDelivery = null;

    /**
     * @var string $NewBarCode
     */
    protected $NewBarCode = null;

    /**
     * @var string $NewDirectPackageBarCode
     */
    protected $NewDirectPackageBarCode = null;

    /**
     * @var string $OriginalBarCode
     */
    protected $OriginalBarCode = null;

    /**
     * @var string $OriginalDirectPackageBarCode
     */
    protected $OriginalDirectPackageBarCode = null;

    /**
     * @var string $ShipmentID
     */
    protected $ShipmentID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDirectionNumber()
    {
      return $this->DirectionNumber;
    }

    /**
     * @param string $DirectionNumber
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setDirectionNumber($DirectionNumber)
    {
      $this->DirectionNumber = $DirectionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDelayedDelivery()
    {
      return $this->IsDelayedDelivery;
    }

    /**
     * @param boolean $IsDelayedDelivery
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setIsDelayedDelivery($IsDelayedDelivery)
    {
      $this->IsDelayedDelivery = $IsDelayedDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewBarCode()
    {
      return $this->NewBarCode;
    }

    /**
     * @param string $NewBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setNewBarCode($NewBarCode)
    {
      $this->NewBarCode = $NewBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewDirectPackageBarCode()
    {
      return $this->NewDirectPackageBarCode;
    }

    /**
     * @param string $NewDirectPackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setNewDirectPackageBarCode($NewDirectPackageBarCode)
    {
      $this->NewDirectPackageBarCode = $NewDirectPackageBarCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setOriginalBarCode($OriginalBarCode)
    {
      $this->OriginalBarCode = $OriginalBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalDirectPackageBarCode()
    {
      return $this->OriginalDirectPackageBarCode;
    }

    /**
     * @param string $OriginalDirectPackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setOriginalDirectPackageBarCode($OriginalDirectPackageBarCode)
    {
      $this->OriginalDirectPackageBarCode = $OriginalDirectPackageBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentID()
    {
      return $this->ShipmentID;
    }

    /**
     * @param string $ShipmentID
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResult
     */
    public function setShipmentID($ShipmentID)
    {
      $this->ShipmentID = $ShipmentID;
      return $this;
    }

}
