<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class DirectPackageRow
{

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var boolean $IsDamaged
     */
    protected $IsDamaged = null;

    /**
     * @var boolean $IsMissing
     */
    protected $IsMissing = null;

    
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
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRow
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDamaged()
    {
      return $this->IsDamaged;
    }

    /**
     * @param boolean $IsDamaged
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRow
     */
    public function setIsDamaged($IsDamaged)
    {
      $this->IsDamaged = $IsDamaged;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMissing()
    {
      return $this->IsMissing;
    }

    /**
     * @param boolean $IsMissing
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\DirectPackageRow
     */
    public function setIsMissing($IsMissing)
    {
      $this->IsMissing = $IsMissing;
      return $this;
    }

}
