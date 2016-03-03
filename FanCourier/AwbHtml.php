<?php
/**
 * Contains class AwbHtml
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

class AwbHtml extends AbstractCommand
{
    const TYPE_DEFAULT = null;
    const TYPE_A6 = 2;

    private $type = self::TYPE_DEFAULT;

    public function getHtml($awbNumber)
    {
        $params = $this->getAuthParams();
        $params['nr'] = $awbNumber;

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('printAwb');

        //HTML
        $params['type'] = $this->type;NULL;
        $endpoint->setParams($params);

        return $endpoint->getResult();
    }

    public function setType($type)
    {
        if (!in_array($type, [self::TYPE_DEFAULT, self::TYPE_A6])) {
            throw new \InvalidArgumentException('Unsupported type');
        }

        $this->type = $type;

        return $this;
    }
}