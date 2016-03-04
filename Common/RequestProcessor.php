<?php
/**
 * Contains class RequestProcessor
 *
 * @package     Konekt\Courier\Common
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-04
 * @version     2016-03-04
 */

namespace Konekt\Courier\Common;

class RequestProcessor
{
    /**
     * @var CommandFactoryInterface
     */
    private $commandFactory;

    public function __construct(CommandFactoryInterface $factory)
    {
        $this->commandFactory = $factory;
    }

    public function process(RequestInterface $request)
    {
        $command = $this->commandFactory->createCommand($request);
        return $command->handle($request);
    }
}