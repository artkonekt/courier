<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageTrackingInfoPHPResponse
{

    /**
     * @var string $SendPackageTrackingInfoPHPResult
     */
    protected $SendPackageTrackingInfoPHPResult = null;

    /**
     * @param string $SendPackageTrackingInfoPHPResult
     */
    public function __construct($SendPackageTrackingInfoPHPResult)
    {
      $this->SendPackageTrackingInfoPHPResult = $SendPackageTrackingInfoPHPResult;
    }

    /**
     * @return string
     */
    public function getSendPackageTrackingInfoPHPResult()
    {
      return $this->SendPackageTrackingInfoPHPResult;
    }

    /**
     * @param string $SendPackageTrackingInfoPHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageTrackingInfoPHPResponse
     */
    public function setSendPackageTrackingInfoPHPResult($SendPackageTrackingInfoPHPResult)
    {
      $this->SendPackageTrackingInfoPHPResult = $SendPackageTrackingInfoPHPResult;
      return $this;
    }

}
