<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ParcelResultInternational
{

    /**
     * @var string $DirectionNumber
     */
    protected $DirectionNumber = null;

    /**
     * @var string $DirectionNumberSender
     */
    protected $DirectionNumberSender = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $NewBarCode
     */
    protected $NewBarCode = null;

    /**
     * @var string $OriginalBarCode
     */
    protected $OriginalBarCode = null;

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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setDirectionNumber($DirectionNumber)
    {
      $this->DirectionNumber = $DirectionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirectionNumberSender()
    {
      return $this->DirectionNumberSender;
    }

    /**
     * @param string $DirectionNumberSender
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setDirectionNumberSender($DirectionNumberSender)
    {
      $this->DirectionNumberSender = $DirectionNumberSender;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setNewBarCode($NewBarCode)
    {
      $this->NewBarCode = $NewBarCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setOriginalBarCode($OriginalBarCode)
    {
      $this->OriginalBarCode = $OriginalBarCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ParcelResultInternational
     */
    public function setShipmentID($ShipmentID)
    {
      $this->ShipmentID = $ShipmentID;
      return $this;
    }

}
