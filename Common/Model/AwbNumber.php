<?php
/**
 * Contains class AwbNumber
 *
 * @package     courier\Common\Model
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-05
 * @version     2016-04-05
 */

namespace Konekt\Courier\Common\Model;


class AwbNumber
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $carrier;

    /**
     * AwbNumber constructor.
     *
     * @param string $carrier
     * @param string $number
     */
    public function __construct($carrier, $number)
    {
        $this->carrier = $carrier;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
}