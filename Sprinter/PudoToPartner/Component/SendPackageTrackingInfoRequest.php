<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageTrackingInfoRequest extends BaseRequest
{

    /**
     * @var ArrayOfPackage $Packages
     */
    protected $Packages = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfPackage
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfPackage $Packages
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageTrackingInfoRequest
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
