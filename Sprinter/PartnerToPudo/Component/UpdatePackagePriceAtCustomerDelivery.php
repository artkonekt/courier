<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class UpdatePackagePriceAtCustomerDelivery
{

    /**
     * @var UpdatePackagePriceAtCustomerDeliveryRequest $request
     */
    protected $request = null;

    /**
     * @param UpdatePackagePriceAtCustomerDeliveryRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return UpdatePackagePriceAtCustomerDeliveryRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param UpdatePackagePriceAtCustomerDeliveryRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\UpdatePackagePriceAtCustomerDelivery
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
