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

use Exception;

/**
 * The top level class which turns the courier requests into responses. This should be used in client codes.
 */
final class RequestProcessor
{
    /**
     * @var CommandFactoryInterface
     */
    private $commandFactory;

    /**
     * RequestProcessor constructor.
     *
     * @param CommandFactoryInterface $factory
     */
    public function __construct(CommandFactoryInterface $factory)
    {
        $this->commandFactory = $factory;
    }

    /**
     * Turns a request into a response with the help of a command.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     * @throws Exception
     */
    public function process(RequestInterface $request)
    {
        $command = $this->commandFactory->createCommand($request);

        if (!$command instanceof CommandInterface) {
            throw new Exception('The command should be of type CommandInterface');
        }

        $response = $command->handle($request);

        if (!$response instanceof ResponseInterface) {
            throw new Exception('The response should be of type ResponseInterface');
        }

        return $response;
    }
}