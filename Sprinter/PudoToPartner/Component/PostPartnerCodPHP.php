<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerCodPHP
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerCodPHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
