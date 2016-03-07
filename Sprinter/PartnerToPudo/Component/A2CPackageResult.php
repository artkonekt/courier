<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class A2CPackageResult
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
     * @var string $NewDirectPackageBarCode
     */
    protected $NewDirectPackageBarCode = null;

    /**
     * @var string $NewNormalPackageBarCode
     */
    protected $NewNormalPackageBarCode = null;

    /**
     * @var string $OriginalDirectPackageBarCode
     */
    protected $OriginalDirectPackageBarCode = null;

    /**
     * @var string $OriginalNormalPackageBarCode
     */
    protected $OriginalNormalPackageBarCode = null;

    
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
     */
    public function setIsDelayedDelivery($IsDelayedDelivery)
    {
      $this->IsDelayedDelivery = $IsDelayedDelivery;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
     */
    public function setNewDirectPackageBarCode($NewDirectPackageBarCode)
    {
      $this->NewDirectPackageBarCode = $NewDirectPackageBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewNormalPackageBarCode()
    {
      return $this->NewNormalPackageBarCode;
    }

    /**
     * @param string $NewNormalPackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
     */
    public function setNewNormalPackageBarCode($NewNormalPackageBarCode)
    {
      $this->NewNormalPackageBarCode = $NewNormalPackageBarCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
     */
    public function setOriginalDirectPackageBarCode($OriginalDirectPackageBarCode)
    {
      $this->OriginalDirectPackageBarCode = $OriginalDirectPackageBarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalNormalPackageBarCode()
    {
      return $this->OriginalNormalPackageBarCode;
    }

    /**
     * @param string $OriginalNormalPackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\A2CPackageResult
     */
    public function setOriginalNormalPackageBarCode($OriginalNormalPackageBarCode)
    {
      $this->OriginalNormalPackageBarCode = $OriginalNormalPackageBarCode;
      return $this;
    }

}
