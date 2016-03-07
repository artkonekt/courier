<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class PudoPartnerProxy extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfPackage' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfPackage',
      'Package' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\Package',
      'ArrayOfServiceFeeRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfServiceFeeRow',
      'ServiceFeeRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ServiceFeeRow',
      'ArrayOfCompensationRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfCompensationRow',
      'CompensationRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\CompensationRow',
      'ArrayOfCodRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfCodRow',
      'CodRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\CodRow',
      'ArrayOfDirectPackageRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfDirectPackageRow',
      'DirectPackageRow' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageRow',
      'ArrayOfArrivingPackage' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrayOfArrivingPackage',
      'ArrivingPackage' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\ArrivingPackage',
      'SendPackageTrackingInfoRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageTrackingInfoRequest',
      'BaseRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\BaseRequest',
      'PostPartnerServiceFeeRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerServiceFeeRequest',
      'PostBaseRequestOfServiceFeeRowTum9FyI6' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostBaseRequestOfServiceFeeRowTum9FyI6',
      'PostPartnerCompensationRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCompensationRequest',
      'PostBaseRequestOfCompensationRowTum9FyI6' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostBaseRequestOfCompensationRowTum9FyI6',
      'PostPartnerCodRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCodRequest',
      'PostBaseRequestOfCodRowTum9FyI6' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostBaseRequestOfCodRowTum9FyI6',
      'DirectPackageRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageRequest',
      'SendPackageArriveRequest' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageArriveRequest',
      'SendPackageTrackingInfo' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageTrackingInfo',
      'SendPackageTrackingInfoPHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageTrackingInfoPHP',
      'SendPackageTrackingInfoPHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageTrackingInfoPHPResponse',
      'PostPartnerServiceFee' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerServiceFee',
      'PostPartnerServiceFeePHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerServiceFeePHP',
      'PostPartnerServiceFeePHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerServiceFeePHPResponse',
      'PostPartnerCompensation' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCompensation',
      'PostPartnerCompensationPHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCompensationPHP',
      'PostPartnerCompensationPHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCompensationPHPResponse',
      'PostPartnerCod' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCod',
      'PostPartnerCodPHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCodPHP',
      'PostPartnerCodPHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\PostPartnerCodPHPResponse',
      'DirectPackageArrive' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageArrive',
      'DirectPackageArrivePHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageArrivePHP',
      'DirectPackageArrivePHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageArrivePHPResponse',
      'DirectPackageReturnings' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageReturnings',
      'DirectPackageReturningsPHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageReturningsPHP',
      'DirectPackageReturningsPHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\DirectPackageReturningsPHPResponse',
      'SendPackageArrive' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageArrive',
      'SendPackageArrivePHP' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageArrivePHP',
      'SendPackageArrivePHPResponse' => 'Konekt\\Courier\\Sprinter\\PudoToPartner\\Component\\SendPackageArrivePHPResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '/home/flajos/Documents/work/artkonekt/mobexpert-outlet/src/SprinterBundle/Controller/../sprinter_lib/pudopartner/Wsdl/lapker.pudo.pudoservice.interface.pudopartner.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SendPackageTrackingInfo $parameters
     * @return void
     */
    public function SendPackageTrackingInfo(SendPackageTrackingInfo $parameters)
    {
      return $this->__soapCall('SendPackageTrackingInfo', array($parameters));
    }

    /**
     * @param SendPackageTrackingInfoPHP $parameters
     * @return SendPackageTrackingInfoPHPResponse
     */
    public function SendPackageTrackingInfoPHP(SendPackageTrackingInfoPHP $parameters)
    {
      return $this->__soapCall('SendPackageTrackingInfoPHP', array($parameters));
    }

    /**
     * @param PostPartnerServiceFee $parameters
     * @return void
     */
    public function PostPartnerServiceFee(PostPartnerServiceFee $parameters)
    {
      return $this->__soapCall('PostPartnerServiceFee', array($parameters));
    }

    /**
     * @param PostPartnerServiceFeePHP $parameters
     * @return PostPartnerServiceFeePHPResponse
     */
    public function PostPartnerServiceFeePHP(PostPartnerServiceFeePHP $parameters)
    {
      return $this->__soapCall('PostPartnerServiceFeePHP', array($parameters));
    }

    /**
     * @param PostPartnerCompensation $parameters
     * @return void
     */
    public function PostPartnerCompensation(PostPartnerCompensation $parameters)
    {
      return $this->__soapCall('PostPartnerCompensation', array($parameters));
    }

    /**
     * @param PostPartnerCompensationPHP $parameters
     * @return PostPartnerCompensationPHPResponse
     */
    public function PostPartnerCompensationPHP(PostPartnerCompensationPHP $parameters)
    {
      return $this->__soapCall('PostPartnerCompensationPHP', array($parameters));
    }

    /**
     * @param PostPartnerCod $parameters
     * @return void
     */
    public function PostPartnerCod(PostPartnerCod $parameters)
    {
      return $this->__soapCall('PostPartnerCod', array($parameters));
    }

    /**
     * @param PostPartnerCodPHP $parameters
     * @return PostPartnerCodPHPResponse
     */
    public function PostPartnerCodPHP(PostPartnerCodPHP $parameters)
    {
      return $this->__soapCall('PostPartnerCodPHP', array($parameters));
    }

    /**
     * @param DirectPackageArrive $parameters
     * @return void
     */
    public function DirectPackageArrive(DirectPackageArrive $parameters)
    {
      return $this->__soapCall('DirectPackageArrive', array($parameters));
    }

    /**
     * @param DirectPackageArrivePHP $parameters
     * @return DirectPackageArrivePHPResponse
     */
    public function DirectPackageArrivePHP(DirectPackageArrivePHP $parameters)
    {
      return $this->__soapCall('DirectPackageArrivePHP', array($parameters));
    }

    /**
     * @param DirectPackageReturnings $parameters
     * @return void
     */
    public function DirectPackageReturnings(DirectPackageReturnings $parameters)
    {
      return $this->__soapCall('DirectPackageReturnings', array($parameters));
    }

    /**
     * @param DirectPackageReturningsPHP $parameters
     * @return DirectPackageReturningsPHPResponse
     */
    public function DirectPackageReturningsPHP(DirectPackageReturningsPHP $parameters)
    {
      return $this->__soapCall('DirectPackageReturningsPHP', array($parameters));
    }

    /**
     * @param SendPackageArrive $parameters
     * @return void
     */
    public function SendPackageArrive(SendPackageArrive $parameters)
    {
      return $this->__soapCall('SendPackageArrive', array($parameters));
    }

    /**
     * @param SendPackageArrivePHP $parameters
     * @return SendPackageArrivePHPResponse
     */
    public function SendPackageArrivePHP(SendPackageArrivePHP $parameters)
    {
      return $this->__soapCall('SendPackageArrivePHP', array($parameters));
    }

}
