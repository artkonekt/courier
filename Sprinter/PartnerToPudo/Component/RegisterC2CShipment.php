<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterC2CShipment
{

    /**
     * @var RegisterC2CShipmentRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterC2CShipmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterC2CShipmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterC2CShipmentRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterC2CShipment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
