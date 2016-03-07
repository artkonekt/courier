<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostPartnerCompensationPHP
{

    /**
     * @var PostPartnerCompensationRequest $request
     */
    protected $request = null;

    /**
     * @param PostPartnerCompensationRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return PostPartnerCompensationRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PostPartnerCompensationRequest $request
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostPartnerCompensationPHP
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
