<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterParcelContainer
{

    /**
     * @var RegisterParcelContainerRequest $request
     */
    protected $request = null;

    /**
     * @param RegisterParcelContainerRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RegisterParcelContainerRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RegisterParcelContainerRequest $request
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterParcelContainer
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
