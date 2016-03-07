<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageReturnings
{

    /**
     * @var DirectPackageRequest $request
     */
    protected $request = null;

    /**
     * @param DirectPackageRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DirectPackageRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DirectPackageRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageReturnings
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
