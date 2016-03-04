<?php
/**
 * Contains class AwbHtmlRequest
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbHtml;

use Konekt\Courier\Common\RequestInterface;

/**
 * Request class abstracting the AWB HTML label generation request.
 */
class AwbHtmlRequest implements RequestInterface
{
    const TYPE_DEFAULT = null;
    const TYPE_A6 = 2;

    /**
     * @var string
     */
    private $awbNumber;

    private $type = self::TYPE_DEFAULT;

    /**
     * AwbHtmlRequest constructor.
     *
     * @param string $awbNumber
     */
    public function __construct($awbNumber)
    {
        $this->awbNumber = $awbNumber;
    }

    /**
     * @param $type
     *
     * @return $this
     */
    public function setType($type)
    {
        if (!in_array($type, [self::TYPE_DEFAULT, self::TYPE_A6])) {
            throw new \InvalidArgumentException('Unsupported type');
        }

        $this->type = $type;

        return $this;
    }

    /**
     * Returns the number of the AWB.
     *
     * @return mixed
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }
}