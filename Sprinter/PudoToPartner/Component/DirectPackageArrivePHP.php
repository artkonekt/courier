<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageArrivePHP
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageArrivePHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
