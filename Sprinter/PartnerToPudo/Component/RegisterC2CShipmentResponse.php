<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterC2CShipmentResponse
{

    /**
     * @var RegisterC2CShipmentResponse $RegisterC2CShipmentResult
     */
    protected $RegisterC2CShipmentResult = null;

    /**
     * @param RegisterC2CShipmentResponse $RegisterC2CShipmentResult
     */
    public function __construct($RegisterC2CShipmentResult)
    {
      $this->RegisterC2CShipmentResult = $RegisterC2CShipmentResult;
    }

    /**
     * @return RegisterC2CShipmentResponse
     */
    public function getRegisterC2CShipmentResult()
    {
      return $this->RegisterC2CShipmentResult;
    }

    /**
     * @param RegisterC2CShipmentResponse $RegisterC2CShipmentResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterC2CShipmentResponse
     */
    public function setRegisterC2CShipmentResult($RegisterC2CShipmentResult)
    {
      $this->RegisterC2CShipmentResult = $RegisterC2CShipmentResult;
      return $this;
    }

}
