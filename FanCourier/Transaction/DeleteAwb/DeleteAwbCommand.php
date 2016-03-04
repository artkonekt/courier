<?php
/**
 * Contains class DeleteAwbCommand
 *
 * @package     Konekt\Courier\FanCourier\Transaction\DeleteAwb
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\FanCourier\Transaction\DeleteAwb;

use FanCourier\fanCourier;
use Konekt\Courier\Common\Exception\InvalidRequestException;
use Konekt\Courier\Common\RequestInterface;
use Konekt\Courier\FanCourier\Transaction\AbstractCommand;

/**
 * Command class dealing with the AWB deletion.
 */
class DeleteAwbCommand extends AbstractCommand
{
    /**
     * Creates an AWB with the help of the fanCourier library and returns the response.
     *
     * @param RequestInterface $request
     *
     * @return \Konekt\Courier\Common\ResponseInterface
     *
     * @throws \Konekt\Courier\FanCourier\Transaction\DeleteAwb\InvalidRequestException
     */
    public function handle(RequestInterface $request)
    {
        if (!$request instanceof DeleteAwbRequest) {
            throw new InvalidRequestException($request);
        }
        $params = $this->getAuthParams();
        $params['AWB'] = $request->getAwbNumber();

        $fc = new fanCourier();
        $endpoint = $fc->getEndpoint('deleteAwb');
        $endpoint->setParams($params);

        return new DeleteAwbResponse($endpoint->getResult());
    }
}