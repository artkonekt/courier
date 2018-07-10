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

use Konekt\Courier\Common\Response\StatusAwareResponseInterface;
use Konekt\Courier\Common\Utils\StringNormalizer;
use FanCourier\fanCourier;
use FanCourier\Plugin\csv\csvItem;
use Konekt\Courier\Common\Exception\InvalidRequestException;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Package;
use Konekt\Courier\FanCourier\Transaction\AbstractCommand;
use Konekt\Courier\FanCourier\Transaction\CreateAwb\Response\Factory;

/**
 * Command class dealing with the AWB creation.
 */
class CreateAwbCommand extends AbstractCommand
{
    /**
     * Creates an AWB based on the data of the request with the help of the fanCourier library and
     * returns the response.
     *
     * @param RequestInterface $request
     *
     * @return StatusAwareResponseInterface
     * @throws \Exception
     * @throws \FanCourier\Plugin\Exeption\fcApiExeption
     * @throws \Konekt\Courier\Common\Exception\InvalidRequestException
     */
    public function handle(RequestInterface $request)
    {
        if (!$request instanceof CreateAwbRequest) {
            throw new InvalidRequestException('The request should be a CreateAwbRequest');
        }


        $params = $this->getAuthParams();

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('awbGenerator');
        $endpoint->createFile();

        $item = $this->createCsvItem($request->getPackage());
        $endpoint->addNewItem($item);

        $params['fisier'] = $endpoint->getFile();
        $endpoint->setParams($params);

        $results = Factory::createResponse($endpoint->getResult());

        return $results[0];
    }

    /**
     * @param Package $package
     *
     * @return csvItem
     */
    private function createCsvItem(Package $package)
    {
        $item = csvItem::newItem();
        $item->setItems($this->toArray($package));

        return $item;
    }

    /**
     * Turns the package into a format needed by the Fancourier API.
     *
     * @param Package $package
     *
     * @return array
     */
    private function toArray(Package $package)
    {
        $stringNormalizer = new StringNormalizer();

        $array = (array)$package;
        $array['judet'] = $stringNormalizer->unaccent($package->judet);
        $array['localitate'] = $stringNormalizer->unaccent($package->localitate);

        //the web service seems to not support newlines, replace them
        $array['observatii'] = preg_replace('#\R+#', ';', $package->observatii);

        return $array;
    }
}