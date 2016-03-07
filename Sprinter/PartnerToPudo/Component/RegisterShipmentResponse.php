<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterShipmentResponse
{

    /**
     * @var RegisterShipmentResponse $RegisterShipmentResult
     */
    protected $RegisterShipmentResult = null;

    /**
     * @param RegisterShipmentResponse $RegisterShipmentResult
     */
    public function __construct($RegisterShipmentResult)
    {
      $this->RegisterShipmentResult = $RegisterShipmentResult;
    }

    /**
     * @return RegisterShipmentResponse
     */
    public function getRegisterShipmentResult()
    {
      return $this->RegisterShipmentResult;
    }

    /**
     * @param RegisterShipmentResponse $RegisterShipmentResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShipmentResponse
     */
    public function setRegisterShipmentResult($RegisterShipmentResult)
    {
      $this->RegisterShipmentResult = $RegisterShipmentResult;
      return $this;
    }

}
