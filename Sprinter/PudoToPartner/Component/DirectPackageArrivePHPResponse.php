<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageArrivePHPResponse
{

    /**
     * @var string $DirectPackageArrivePHPResult
     */
    protected $DirectPackageArrivePHPResult = null;

    /**
     * @param string $DirectPackageArrivePHPResult
     */
    public function __construct($DirectPackageArrivePHPResult)
    {
      $this->DirectPackageArrivePHPResult = $DirectPackageArrivePHPResult;
    }

    /**
     * @return string
     */
    public function getDirectPackageArrivePHPResult()
    {
      return $this->DirectPackageArrivePHPResult;
    }

    /**
     * @param string $DirectPackageArrivePHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageArrivePHPResponse
     */
    public function setDirectPackageArrivePHPResult($DirectPackageArrivePHPResult)
    {
      $this->DirectPackageArrivePHPResult = $DirectPackageArrivePHPResult;
      return $this;
    }

}
