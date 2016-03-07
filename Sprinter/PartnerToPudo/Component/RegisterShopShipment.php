<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterShopShipment
{

    /**
     * @var RegisterShopShipmentRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterShopShipmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterShopShipmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterShopShipmentRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
