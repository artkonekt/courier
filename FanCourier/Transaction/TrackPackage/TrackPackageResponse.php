<?php
/**
 * Contains class DeleteAwbResponse
 *
 * @package     Konekt\Courier\FanCourier\Transaction\DeleteAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\TrackPackage;


use Konekt\Courier\Common\ResponseInterface;

/**
 * Response class abstracting the AWB deletion response.
 */
class TrackPackageResponse implements ResponseInterface
{
    /**
     * @var string
     */
    private $rawResponse;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var PackageState
     */
    private $state;

    /**
     * DeleteAwbResponse constructor.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->rawResponse = $response;
        $this->state = $this->getStateFromResponse();
    }

    /**
     * Returns true in case of success.
     *
     * @return bool
     */
    public function isSuccess()
    {
        return ($this->state != PackageState::UNKNOWN());
    }
    /**
     * Returns the error message if the response is not a successful one.
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->rawResponse;
    }

    /**
     * @return PackageState
     */
    public function getState()
    {
        return $this->state;
    }

    private function getStateFromResponse()
    {
        $map = [
            "AWB-ul nu a fost predat catre FAN Courier" => PackageState::AWB_NU_A_FOST_PREDAT_CATRE_FANCOURIER,
            "Expeditie in livrare" => PackageState::EXPEDITIE_IN_LIVRARE,
            "Livrat" => PackageState::LIVRAT,
            "Avizat" => PackageState::AVIZAT,
            "Refuz primire" => PackageState::REFUZ_PRIMIRE,
            "Refuz plata transport" => PackageState::REFUZ_PLATA_TRANSPORT,
            "Livrare din sediul FAN Courier" => PackageState::LIVRARE_DIN_SEDIUL_FAN_COURIER,
            "Redirectionat" => PackageState::REDIRECTIONAT,
            "Contactat, livrare ulterioara" => PackageState::CONTACTAT_LIVRARE_ULTERIOARA,
            "Restrictii acces la adresa" => PackageState::RESTRICTII_ACCES_LA_ADRESA,
            "Refuz plata ramburs" => PackageState::REFUZ_PLATA_RAMBURS,
            "AWB neexpediat" => PackageState::AWB_NEEXPEDIAT,
            "Adresa gresita" => PackageState::ADRESA_GRESITA,
            "Retur" => PackageState::RETUR
        ];

        $state = PackageState::UNKNOWN();

        foreach ($map as $key => $value) {
            if (false !== strpos($this->rawResponse, $key)) {
                $state = new PackageState($value);
                break;
            }
        }

        return $state;
    }
}