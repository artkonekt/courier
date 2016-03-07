<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class RegisterReturningPackagesRequest
{

    /**
     * @var \DateTime $DeliverableDateFrom
     */
    protected $DeliverableDateFrom = null;

    /**
     * @var \DateTime $DeliverableDateTo
     */
    protected $DeliverableDateTo = null;

    /**
     * @var boolean $IsSupplementData
     */
    protected $IsSupplementData = null;

    /**
     * @var Package $Package
     */
    protected $Package = null;

    /**
     * @var string $PartnerAddress
     */
    protected $PartnerAddress = null;

    /**
     * @var string $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var string $ShipmentId
     */
    protected $ShipmentId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDeliverableDateFrom()
    {
      if ($this->DeliverableDateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliverableDateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliverableDateFrom
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setDeliverableDateFrom(\DateTime $DeliverableDateFrom = null)
    {
      if ($DeliverableDateFrom == null) {
       $this->DeliverableDateFrom = null;
      } else {
        $this->DeliverableDateFrom = $DeliverableDateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliverableDateTo()
    {
      if ($this->DeliverableDateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliverableDateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliverableDateTo
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setDeliverableDateTo(\DateTime $DeliverableDateTo = null)
    {
      if ($DeliverableDateTo == null) {
       $this->DeliverableDateTo = null;
      } else {
        $this->DeliverableDateTo = $DeliverableDateTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSupplementData()
    {
      return $this->IsSupplementData;
    }

    /**
     * @param boolean $IsSupplementData
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setIsSupplementData($IsSupplementData)
    {
      $this->IsSupplementData = $IsSupplementData;
      return $this;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param Package $Package
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setPackage($Package)
    {
      $this->Package = $Package;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerAddress()
    {
      return $this->PartnerAddress;
    }

    /**
     * @param string $PartnerAddress
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setPartnerAddress($PartnerAddress)
    {
      $this->PartnerAddress = $PartnerAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
      return $this->PartnerCode;
    }

    /**
     * @param string $PartnerCode
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
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
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\RegisterReturningPackagesRequest
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

}
