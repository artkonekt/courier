<?php
/**
 * Contains class CreateAwbCommand
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\CreateAwb;


use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Package;
use FanCourier\fanCourier;
use FanCourier\Plugin\csv\csvItem;
use Konekt\Courier\FanCourier\Transaction\AbstractCommand;

class CreateAwbCommand extends AbstractCommand
{

    public function handle(RequestInterface $request)
    {
        try {

            $params = $this->getAuthParams();

            $fc = new fanCourier();
            $endpoint = $fc->getEndpoint('awbGenerator');
            $endpoint->createFile();

            $item = $this->createCsvItem($request->getPackage());
            $endpoint->addNewItem($item);

            $params['fisier'] = $endpoint->getFile();
            $endpoint->setParams($params);

            $results = CreateAwbResponse::createFromApiResponse($endpoint->getResult());
        } catch (\Exception $exc) {
            $results = CreateAwbResponse::createFromException($exc);
        }

        return $results[0];
    }

    private function createCsvItem(Package $package)
    {
        $item = csvItem::newItem();
        $item->setItems($this->toArray($package));

        return $item;
    }

    private function toArray(Package $package)
    {
        $array = (array) $package;
        $array['judet'] = $this->unaccent($package->judet);
        $array['localitate'] = $this->unaccent($package->localitate);
        return $array;
    }

    private function unaccent($string)
    {
        $accentMap = ['ă' => 'a', 'â' => 'a', 'î' => 'i', 'ț' => 't', 'ș' => 's'];
        return strtr($string, $accentMap);
    }
}