<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageTrackingInfoPHP
{

    /**
     * @var SendPackageTrackingInfoRequest $request
     */
    protected $request = null;

    /**
     * @param SendPackageTrackingInfoRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return SendPackageTrackingInfoRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SendPackageTrackingInfoRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageTrackingInfoPHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
