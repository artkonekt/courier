<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class BaseRequest
{

    /**
     * @var string $PartnerWebServiceUrl
     */
    protected $PartnerWebServiceUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPartnerWebServiceUrl()
    {
      return $this->PartnerWebServiceUrl;
    }

    /**
     * @param string $PartnerWebServiceUrl
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\BaseRequest
     */
    public function setPartnerWebServiceUrl($PartnerWebServiceUrl)
    {
      $this->PartnerWebServiceUrl = $PartnerWebServiceUrl;
      return $this;
    }

}
