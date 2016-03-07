<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerCodPHPResponse
{

    /**
     * @var string $PostPartnerCodPHPResult
     */
    protected $PostPartnerCodPHPResult = null;

    /**
     * @param string $PostPartnerCodPHPResult
     */
    public function __construct($PostPartnerCodPHPResult)
    {
      $this->PostPartnerCodPHPResult = $PostPartnerCodPHPResult;
    }

    /**
     * @return string
     */
    public function getPostPartnerCodPHPResult()
    {
      return $this->PostPartnerCodPHPResult;
    }

    /**
     * @param string $PostPartnerCodPHPResult
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerCodPHPResponse
     */
    public function setPostPartnerCodPHPResult($PostPartnerCodPHPResult)
    {
      $this->PostPartnerCodPHPResult = $PostPartnerCodPHPResult;
      return $this;
    }

}
