<?php
/**
 * Contains class AwbPdf
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;


use FanCourier\fanCourier;

class AwbPdf extends AbstractCommand
{
    //Pdf page type: A4,A5,A6
    const PAGE_A4 = 'A4';
    const PAGE_A5 = 'A5';
    const PAGE_A6 = 'A6';

    //0 or 1, if page A6 type=1
    const TYPE_DEFAULT = '0';
    const TYPE_A6 = '1';

    private $page = self::PAGE_A5;

    private $type = self::TYPE_DEFAULT;

    public function getPdf($awbNumber)
    {
        $params = $this->getAuthParams();
        $params['nr'] = $awbNumber;

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('printAwb');

        //PDF
        $endpoint->setType('pdf');
        $params['page'] = $this->page; // Optional -> Pdf page type: A4,A5,A6
        $params['type'] = $this->type; // Optional -> 0 or 1, if page A6 type=1
        $endpoint->setParams($params);

        return $endpoint->getResult();
    }

    /**
     * @param string $page
     *
     * @return AwbPdf
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
     * @return AwbPdf
     */
    public function setType($type)
    {
        if (!in_array($type, [self::TYPE_DEFAULT, self::TYPE_A6])) {
            throw new \InvalidArgumentException('Unsupported page type');
        }

        $this->type = $type;

        return $this;
    }
}