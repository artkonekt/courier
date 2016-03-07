<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterA2CShipmentResponse
{

    /**
     * @var RegisterA2CShipmentResponse $RegisterA2CShipmentResult
     */
    protected $RegisterA2CShipmentResult = null;

    /**
     * @param RegisterA2CShipmentResponse $RegisterA2CShipmentResult
     */
    public function __construct($RegisterA2CShipmentResult)
    {
      $this->RegisterA2CShipmentResult = $RegisterA2CShipmentResult;
    }

    /**
     * @return RegisterA2CShipmentResponse
     */
    public function getRegisterA2CShipmentResult()
    {
      return $this->RegisterA2CShipmentResult;
    }

    /**
     * @param RegisterA2CShipmentResponse $RegisterA2CShipmentResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterA2CShipmentResponse
     */
    public function setRegisterA2CShipmentResult($RegisterA2CShipmentResult)
    {
      $this->RegisterA2CShipmentResult = $RegisterA2CShipmentResult;
      return $this;
    }

}
