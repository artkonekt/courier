<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class PackageResult
{

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
     * @var string $OriginalBarCode
     */
    protected $OriginalBarCode = null;

    
    public function __construct()
    {
    
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageResult
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageResult
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageResult
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\PackageResult
     */
    public function setOriginalBarCode($OriginalBarCode)
    {
      $this->OriginalBarCode = $OriginalBarCode;
      return $this;
    }

}
