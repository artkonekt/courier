<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageArrivePHPResponse
{

    /**
     * @var string $SendPackageArrivePHPResult
     */
    protected $SendPackageArrivePHPResult = null;

    /**
     * @param string $SendPackageArrivePHPResult
     */
    public function __construct($SendPackageArrivePHPResult)
    {
      $this->SendPackageArrivePHPResult = $SendPackageArrivePHPResult;
    }

    /**
     * @return string
     */
    public function getSendPackageArrivePHPResult()
    {
      return $this->SendPackageArrivePHPResult;
    }

    /**
     * @param string $SendPackageArrivePHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageArrivePHPResponse
     */
    public function setSendPackageArrivePHPResult($SendPackageArrivePHPResult)
    {
      $this->SendPackageArrivePHPResult = $SendPackageArrivePHPResult;
      return $this;
    }

}
