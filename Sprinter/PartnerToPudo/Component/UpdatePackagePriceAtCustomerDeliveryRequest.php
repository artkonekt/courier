<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class UpdatePackagePriceAtCustomerDeliveryRequest
{

    /**
     * @var string $PackageBarCode
     */
    protected $PackageBarCode = null;

    /**
     * @var string $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var float $PriceAtCustomerDelivery
     */
    protected $PriceAtCustomerDelivery = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPackageBarCode()
    {
      return $this->PackageBarCode;
    }

    /**
     * @param string $PackageBarCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\UpdatePackagePriceAtCustomerDeliveryRequest
     */
    public function setPackageBarCode($PackageBarCode)
    {
      $this->PackageBarCode = $PackageBarCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\UpdatePackagePriceAtCustomerDeliveryRequest
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceAtCustomerDelivery()
    {
      return $this->PriceAtCustomerDelivery;
    }

    /**
     * @param float $PriceAtCustomerDelivery
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\UpdatePackagePriceAtCustomerDeliveryRequest
     */
    public function setPriceAtCustomerDelivery($PriceAtCustomerDelivery)
    {
      $this->PriceAtCustomerDelivery = $PriceAtCustomerDelivery;
      return $this;
    }

}
