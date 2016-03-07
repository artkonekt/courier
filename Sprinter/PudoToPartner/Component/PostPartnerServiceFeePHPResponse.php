<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerServiceFeePHPResponse
{

    /**
     * @var string $PostPartnerServiceFeePHPResult
     */
    protected $PostPartnerServiceFeePHPResult = null;

    /**
     * @param string $PostPartnerServiceFeePHPResult
     */
    public function __construct($PostPartnerServiceFeePHPResult)
    {
      $this->PostPartnerServiceFeePHPResult = $PostPartnerServiceFeePHPResult;
    }

    /**
     * @return string
     */
    public function getPostPartnerServiceFeePHPResult()
    {
      return $this->PostPartnerServiceFeePHPResult;
    }

    /**
     * @param string $PostPartnerServiceFeePHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerServiceFeePHPResponse
     */
    public function setPostPartnerServiceFeePHPResult($PostPartnerServiceFeePHPResult)
    {
      $this->PostPartnerServiceFeePHPResult = $PostPartnerServiceFeePHPResult;
      return $this;
    }

}
