<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterC2CShopShipment
{

    /**
     * @var RegisterC2CShopShipmentRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterC2CShopShipmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterC2CShopShipmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterC2CShopShipmentRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterC2CShopShipment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
