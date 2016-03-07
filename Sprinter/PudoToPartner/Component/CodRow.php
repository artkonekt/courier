<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class CodRow
{

    /**
     * @var float $CorrectedSumValue
     */
    protected $CorrectedSumValue = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $ShopId
     */
    protected $ShopId = null;

    /**
     * @var float $SumValue
     */
    protected $SumValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCorrectedSumValue()
    {
      return $this->CorrectedSumValue;
    }

    /**
     * @param float $CorrectedSumValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CodRow
     */
    public function setCorrectedSumValue($CorrectedSumValue)
    {
      $this->CorrectedSumValue = $CorrectedSumValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CodRow
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CodRow
     */
    public function setShopId($ShopId)
    {
      $this->ShopId = $ShopId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumValue()
    {
      return $this->SumValue;
    }

    /**
     * @param float $SumValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CodRow
     */
    public function setSumValue($SumValue)
    {
      $this->SumValue = $SumValue;
      return $this;
    }

}
