<?php
/**
 * Contains class AwbPdfRequest
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier\Transaction\AwbPdf;

use Konekt\Courier\Common\RequestInterface;

class AwbPdfRequest implements RequestInterface
{
    //Pdf page type: A4,A5,A6
    const PAGE_A4 = 'A4';
    const PAGE_A5 = 'A5';
    const PAGE_A6 = 'A6';

    //0 or 1, if page A6 type=1
    const TYPE_DEFAULT = '0';
    const TYPE_A6 = '1';

    private $awbNumber;

    private $page = self::PAGE_A5;

    private $type = self::TYPE_DEFAULT;

    public function __construct($awbNumber)
    {
        $this->awbNumber = $awbNumber;
    }

    /**
     * @param string $page
     *
     * @return AwbPdfRequest
     */
    public function setPage($page)
    {
        if (!in_array($page, [self::PAGE_A4, self::PAGE_A5, self::PAGE_A6])) {
            throw new \InvalidArgumentException('Unsupported page type');
        }

        $this->page = $page;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return AwbPdfRequest
     */
    public function setType($type)
    {
        if (!in_array($type, [self::TYPE_DEFAULT, self::TYPE_A6])) {
            throw new \InvalidArgumentException('Unsupported page type');
        }

        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


}