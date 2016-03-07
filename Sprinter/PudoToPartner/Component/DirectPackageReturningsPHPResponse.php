<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageReturningsPHPResponse
{

    /**
     * @var string $DirectPackageReturningsPHPResult
     */
    protected $DirectPackageReturningsPHPResult = null;

    /**
     * @param string $DirectPackageReturningsPHPResult
     */
    public function __construct($DirectPackageReturningsPHPResult)
    {
      $this->DirectPackageReturningsPHPResult = $DirectPackageReturningsPHPResult;
    }

    /**
     * @return string
     */
    public function getDirectPackageReturningsPHPResult()
    {
      return $this->DirectPackageReturningsPHPResult;
    }

    /**
     * @param string $DirectPackageReturningsPHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageReturningsPHPResponse
     */
    public function setDirectPackageReturningsPHPResult($DirectPackageReturningsPHPResult)
    {
      $this->DirectPackageReturningsPHPResult = $DirectPackageReturningsPHPResult;
      return $this;
    }

}
