<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class UpdatePackagePriceAtCustomerDeliveryResponse
{

    /**
     * @var UpdatePackagePriceAtCustomerDeliveryResponse $UpdatePackagePriceAtCustomerDeliveryResult
     */
    protected $UpdatePackagePriceAtCustomerDeliveryResult = null;

    /**
     * @param UpdatePackagePriceAtCustomerDeliveryResponse $UpdatePackagePriceAtCustomerDeliveryResult
     */
    public function __construct($UpdatePackagePriceAtCustomerDeliveryResult)
    {
      $this->UpdatePackagePriceAtCustomerDeliveryResult = $UpdatePackagePriceAtCustomerDeliveryResult;
    }

    /**
     * @return UpdatePackagePriceAtCustomerDeliveryResponse
     */
    public function getUpdatePackagePriceAtCustomerDeliveryResult()
    {
      return $this->UpdatePackagePriceAtCustomerDeliveryResult;
    }

    /**
     * @param UpdatePackagePriceAtCustomerDeliveryResponse $UpdatePackagePriceAtCustomerDeliveryResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\UpdatePackagePriceAtCustomerDeliveryResponse
     */
    public function setUpdatePackagePriceAtCustomerDeliveryResult($UpdatePackagePriceAtCustomerDeliveryResult)
    {
      $this->UpdatePackagePriceAtCustomerDeliveryResult = $UpdatePackagePriceAtCustomerDeliveryResult;
      return $this;
    }

}
