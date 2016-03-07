<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PostBaseRequestOfCompensationRowTum9FyI6 extends BaseRequest
{

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @var string $PartnerSettlementId
     */
    protected $PartnerSettlementId = null;

    /**
     * @var boolean $Resend
     */
    protected $Resend = null;

    /**
     * @var ArrayOfCompensationRow $Rows
     */
    protected $Rows = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->DateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateFrom
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostBaseRequestOfCompensationRowTum9FyI6
     */
    public function setDateFrom(\DateTime $DateFrom = null)
    {
      if ($DateFrom == null) {
       $this->DateFrom = null;
      } else {
        $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->DateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTo
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostBaseRequestOfCompensationRowTum9FyI6
     */
    public function setDateTo(\DateTime $DateTo = null)
    {
      if ($DateTo == null) {
       $this->DateTo = null;
      } else {
        $this->DateTo = $DateTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerSettlementId()
    {
      return $this->PartnerSettlementId;
    }

    /**
     * @param string $PartnerSettlementId
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostBaseRequestOfCompensationRowTum9FyI6
     */
    public function setPartnerSettlementId($PartnerSettlementId)
    {
      $this->PartnerSettlementId = $PartnerSettlementId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResend()
    {
      return $this->Resend;
    }

    /**
     * @param boolean $Resend
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostBaseRequestOfCompensationRowTum9FyI6
     */
    public function setResend($Resend)
    {
      $this->Resend = $Resend;
      return $this;
    }

    /**
     * @return ArrayOfCompensationRow
     */
    public function getRows()
    {
      return $this->Rows;
    }

    /**
     * @param ArrayOfCompensationRow $Rows
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\PostBaseRequestOfCompensationRowTum9FyI6
     */
    public function setRows($Rows)
    {
      $this->Rows = $Rows;
      return $this;
    }

}
