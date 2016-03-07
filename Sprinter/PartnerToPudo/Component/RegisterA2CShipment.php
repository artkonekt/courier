<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterA2CShipment
{

    /**
     * @var RegisterA2CShipmentRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterA2CShipmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterA2CShipmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterA2CShipmentRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterA2CShipment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
