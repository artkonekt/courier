<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterParcelContainerResponse
{

    /**
     * @var RegisterParcelContainerResponse $RegisterParcelContainerResult
     */
    protected $RegisterParcelContainerResult = null;

    /**
     * @param RegisterParcelContainerResponse $RegisterParcelContainerResult
     */
    public function __construct($RegisterParcelContainerResult)
    {
      $this->RegisterParcelContainerResult = $RegisterParcelContainerResult;
    }

    /**
     * @return RegisterParcelContainerResponse
     */
    public function getRegisterParcelContainerResult()
    {
      return $this->RegisterParcelContainerResult;
    }

    /**
     * @param RegisterParcelContainerResponse $RegisterParcelContainerResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainerResponse
     */
    public function setRegisterParcelContainerResult($RegisterParcelContainerResult)
    {
      $this->RegisterParcelContainerResult = $RegisterParcelContainerResult;
      return $this;
    }

}
