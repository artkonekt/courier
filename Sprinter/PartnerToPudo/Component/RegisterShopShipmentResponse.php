<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterShopShipmentResponse
{

    /**
     * @var RegisterShopShipmentResponse $RegisterShopShipmentResult
     */
    protected $RegisterShopShipmentResult = null;

    /**
     * @param RegisterShopShipmentResponse $RegisterShopShipmentResult
     */
    public function __construct($RegisterShopShipmentResult)
    {
      $this->RegisterShopShipmentResult = $RegisterShopShipmentResult;
    }

    /**
     * @return RegisterShopShipmentResponse
     */
    public function getRegisterShopShipmentResult()
    {
      return $this->RegisterShopShipmentResult;
    }

    /**
     * @param RegisterShopShipmentResponse $RegisterShopShipmentResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterShopShipmentResponse
     */
    public function setRegisterShopShipmentResult($RegisterShopShipmentResult)
    {
      $this->RegisterShopShipmentResult = $RegisterShopShipmentResult;
      return $this;
    }

}
