<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterC2CShopShipmentResponse
{

    /**
     * @var RegisterC2CShopShipmentResponse $RegisterC2CShopShipmentResult
     */
    protected $RegisterC2CShopShipmentResult = null;

    /**
     * @param RegisterC2CShopShipmentResponse $RegisterC2CShopShipmentResult
     */
    public function __construct($RegisterC2CShopShipmentResult)
    {
      $this->RegisterC2CShopShipmentResult = $RegisterC2CShopShipmentResult;
    }

    /**
     * @return RegisterC2CShopShipmentResponse
     */
    public function getRegisterC2CShopShipmentResult()
    {
      return $this->RegisterC2CShopShipmentResult;
    }

    /**
     * @param RegisterC2CShopShipmentResponse $RegisterC2CShopShipmentResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterC2CShopShipmentResponse
     */
    public function setRegisterC2CShopShipmentResult($RegisterC2CShopShipmentResult)
    {
      $this->RegisterC2CShopShipmentResult = $RegisterC2CShopShipmentResult;
      return $this;
    }

}
