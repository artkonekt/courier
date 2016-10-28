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
        $state = PackageState::UNKNOWN();

        foreach (array_flip(PackageState::choices()) as $key => $value) {
            if (false !== strpos($this->rawResponse, $key)) {
                $state = new PackageState($value);
                break;
            }
        }

        return $state;
    }
}
