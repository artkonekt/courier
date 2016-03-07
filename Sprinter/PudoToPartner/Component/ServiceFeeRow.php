<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ServiceFeeRow
{

    /**
     * @var float $CorrectedServiceFeeValue
     */
    protected $CorrectedServiceFeeValue = null;

    /**
     * @var string $DueType
     */
    protected $DueType = null;

    /**
     * @var int $PackageCount
     */
    protected $PackageCount = null;

    /**
     * @var PackageType $PackageType
     */
    protected $PackageType = null;

    /**
     * @var float $ServiceFeeValue
     */
    protected $ServiceFeeValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCorrectedServiceFeeValue()
    {
      return $this->CorrectedServiceFeeValue;
    }

    /**
     * @param float $CorrectedServiceFeeValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ServiceFeeRow
     */
    public function setCorrectedServiceFeeValue($CorrectedServiceFeeValue)
    {
      $this->CorrectedServiceFeeValue = $CorrectedServiceFeeValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getDueType()
    {
      return $this->DueType;
    }

    /**
     * @param string $DueType
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ServiceFeeRow
     */
    public function setDueType($DueType)
    {
      $this->DueType = $DueType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageCount()
    {
      return $this->PackageCount;
    }

    /**
     * @param int $PackageCount
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ServiceFeeRow
     */
    public function setPackageCount($PackageCount)
    {
      $this->PackageCount = $PackageCount;
      return $this;
    }

    /**
     * @return PackageType
     */
    public function getPackageType()
    {
      return $this->PackageType;
    }

    /**
     * @param PackageType $PackageType
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ServiceFeeRow
     */
    public function setPackageType($PackageType)
    {
      $this->PackageType = $PackageType;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceFeeValue()
    {
      return $this->ServiceFeeValue;
    }

    /**
     * @param float $ServiceFeeValue
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ServiceFeeRow
     */
    public function setServiceFeeValue($ServiceFeeValue)
    {
      $this->ServiceFeeValue = $ServiceFeeValue;
      return $this;
    }

}
