<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterShipment
{

    /**
     * @var RegisterShipmentRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterShipmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterShipmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterShipmentRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShipment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
