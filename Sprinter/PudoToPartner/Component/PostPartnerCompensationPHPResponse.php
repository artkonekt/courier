<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerCompensationPHPResponse
{

    /**
     * @var string $PostPartnerCompensationPHPResult
     */
    protected $PostPartnerCompensationPHPResult = null;

    /**
     * @param string $PostPartnerCompensationPHPResult
     */
    public function __construct($PostPartnerCompensationPHPResult)
    {
      $this->PostPartnerCompensationPHPResult = $PostPartnerCompensationPHPResult;
    }

    /**
     * @return string
     */
    public function getPostPartnerCompensationPHPResult()
    {
      return $this->PostPartnerCompensationPHPResult;
    }

    /**
     * @param string $PostPartnerCompensationPHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerCompensationPHPResponse
     */
    public function setPostPartnerCompensationPHPResult($PostPartnerCompensationPHPResult)
    {
      $this->PostPartnerCompensationPHPResult = $PostPartnerCompensationPHPResult;
      return $this;
    }

}
