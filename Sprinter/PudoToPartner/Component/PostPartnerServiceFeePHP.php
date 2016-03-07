<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerServiceFeePHP
{

    /**
     * @var PostPartnerServiceFeeRequest $request
     */
    protected $request = null;

    /**
     * @param PostPartnerServiceFeeRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return PostPartnerServiceFeeRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PostPartnerServiceFeeRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerServiceFeePHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
