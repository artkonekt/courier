<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class Package
{

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $CurrentLocation
     */
    protected $CurrentLocation = null;

    /**
     * @var string $PartnerBarcode
     */
    protected $PartnerBarcode = null;

    /**
     * @var \DateTime $StatusDateTime
     */
    protected $StatusDateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\Package
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentLocation()
    {
      return $this->CurrentLocation;
    }

    /**
     * @param string $CurrentLocation
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\Package
     */
    public function setCurrentLocation($CurrentLocation)
    {
      $this->CurrentLocation = $CurrentLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerBarcode()
    {
      return $this->PartnerBarcode;
    }

    /**
     * @param string $PartnerBarcode
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\Package
     */
    public function setPartnerBarcode($PartnerBarcode)
    {
      $this->PartnerBarcode = $PartnerBarcode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStatusDateTime()
    {
      if ($this->StatusDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StatusDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StatusDateTime
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\Package
     */
    public function setStatusDateTime(\DateTime $StatusDateTime = null)
    {
      if ($StatusDateTime == null) {
       $this->StatusDateTime = null;
      } else {
        $this->StatusDateTime = $StatusDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
