<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageTrackingInfo
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageTrackingInfo
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
