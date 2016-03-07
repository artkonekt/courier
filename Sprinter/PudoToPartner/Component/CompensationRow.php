<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class CompensationRow
{

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var float $CompensationValue
     */
    protected $CompensationValue = null;

    /**
     * @var float $CorrectedCompensationValue
     */
    protected $CorrectedCompensationValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CompensationRow
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getCompensationValue()
    {
      return $this->CompensationValue;
    }

    /**
     * @param float $CompensationValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CompensationRow
     */
    public function setCompensationValue($CompensationValue)
    {
      $this->CompensationValue = $CompensationValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getCorrectedCompensationValue()
    {
      return $this->CorrectedCompensationValue;
    }

    /**
     * @param float $CorrectedCompensationValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\CompensationRow
     */
    public function setCorrectedCompensationValue($CorrectedCompensationValue)
    {
      $this->CorrectedCompensationValue = $CorrectedCompensationValue;
      return $this;
    }

}
