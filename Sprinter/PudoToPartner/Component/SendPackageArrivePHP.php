<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageArrivePHP
{

    /**
     * @var SendPackageArriveRequest $request
     */
    protected $request = null;

    /**
     * @param SendPackageArriveRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return SendPackageArriveRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SendPackageArriveRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageArrivePHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}