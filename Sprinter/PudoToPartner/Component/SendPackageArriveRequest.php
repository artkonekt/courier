<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class SendPackageArriveRequest extends BaseRequest
{

    /**
     * @var ArrayOfArrivingPackage $Packages
     */
    protected $Packages = null;

    /**
     * @var string $ShipmentId
     */
    protected $ShipmentId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfArrivingPackage
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfArrivingPackage $Packages
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageArriveRequest
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
      return $this->ShipmentId;
    }

    /**
     * @param string $ShipmentId
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\SendPackageArriveRequest
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

}
