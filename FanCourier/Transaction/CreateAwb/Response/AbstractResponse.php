<?php
/**
 * Contains class AbstractResponse
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb\Response;


use Konekt\Courier\Common\Response\StatusAwareResponse;
use Konekt\Courier\Common\Response\StatusAwareResponseInterface;

/**
 * Class AbstractResponse
 */
abstract class AbstractResponse implements StatusAwareResponseInterface
{
    /**
     * @var string
     */
    protected $lineNumber;

    /**
     * Returns the line number of the item in the AWB CSV file to which this response object belongs.
     *
     * @return int
     */
    public function getLineNumber()
    {
        return (int) $this->lineNumber;
    }
}