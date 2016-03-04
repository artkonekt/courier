<?php
/**
 * Contains class SingleAwbCreator
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;


use FanCourier\fanCourier;

class SingleAwbCreator extends AbstractCommand
{
    public function create(Package $awb)
    {
        try {

            $params = $this->getAuthParams();

            $fc = new fanCourier();
            $endpoint = $fc->getEndpoint('awbGenerator');
            $endpoint->createFile();

            $item = Package::createCsvItem($awb);
            $endpoint->addNewItem($item);

            $params['fisier'] = $endpoint->getFile();
            $endpoint->setParams($params);

            $results = AwbCreationResult::createFromApiResponse($endpoint->getResult());
        } catch (\Exception $exc) {
            $results = AwbCreationResult::createFromException($exc);
        }

        return $results[0];
    }
}