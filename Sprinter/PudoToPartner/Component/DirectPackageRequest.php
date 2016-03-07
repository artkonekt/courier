<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageRequest extends BaseRequest
{

    /**
     * @var \DateTime $ArriveOrDeadLineDate
     */
    protected $ArriveOrDeadLineDate = null;

    /**
     * @var ArrayOfDirectPackageRow $DirectPackageArriveRows
     */
    protected $DirectPackageArriveRows = null;

    /**
     * @var string $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var string $ShopId
     */
    protected $ShopId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getArriveOrDeadLineDate()
    {
      if ($this->ArriveOrDeadLineDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArriveOrDeadLineDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArriveOrDeadLineDate
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRequest
     */
    public function setArriveOrDeadLineDate(\DateTime $ArriveOrDeadLineDate = null)
    {
      if ($ArriveOrDeadLineDate == null) {
       $this->ArriveOrDeadLineDate = null;
      } else {
        $this->ArriveOrDeadLineDate = $ArriveOrDeadLineDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfDirectPackageRow
     */
    public function getDirectPackageArriveRows()
    {
      return $this->DirectPackageArriveRows;
    }

    /**
     * @param ArrayOfDirectPackageRow $DirectPackageArriveRows
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRequest
     */
    public function setDirectPackageArriveRows($DirectPackageArriveRows)
    {
      $this->DirectPackageArriveRows = $DirectPackageArriveRows;
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRequest
     */
    public function setShipmentId($ShipmentId)
    {
      $this->ShipmentId = $ShipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getShopId()
    {
      return $this->ShopId;
    }

    /**
     * @param string $ShopId
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRequest
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

}
