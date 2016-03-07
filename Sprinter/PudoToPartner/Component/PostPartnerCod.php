<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerCod
{

    /**
     * @var PostPartnerCodRequest $request
     */
    protected $request = null;

    /**
     * @param PostPartnerCodRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return PostPartnerCodRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PostPartnerCodRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerCod
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
