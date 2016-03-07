<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterReturningPackages
{

    /**
     * @var RegisterReturningPackagesRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterReturningPackagesRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterReturningPackagesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterReturningPackagesRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackages
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
