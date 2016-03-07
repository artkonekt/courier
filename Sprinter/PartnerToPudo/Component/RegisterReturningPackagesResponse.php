<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterReturningPackagesResponse
{

    /**
     * @var RegisterReturningPackagesResponse $RegisterReturningPackagesResult
     */
    protected $RegisterReturningPackagesResult = null;

    /**
     * @param RegisterReturningPackagesResponse $RegisterReturningPackagesResult
     */
    public function __construct($RegisterReturningPackagesResult)
    {
      $this->RegisterReturningPackagesResult = $RegisterReturningPackagesResult;
    }

    /**
     * @return RegisterReturningPackagesResponse
     */
    public function getRegisterReturningPackagesResult()
    {
      return $this->RegisterReturningPackagesResult;
    }

    /**
     * @param RegisterReturningPackagesResponse $RegisterReturningPackagesResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesResponse
     */
    public function setRegisterReturningPackagesResult($RegisterReturningPackagesResult)
    {
      $this->RegisterReturningPackagesResult = $RegisterReturningPackagesResult;
      return $this;
    }

}
