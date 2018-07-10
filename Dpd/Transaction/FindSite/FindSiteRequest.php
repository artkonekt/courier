<?php

/**
 * Contains the FindSiteRequest class
 *
 * @package     Dpd\Transaction\FindSite
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2018-07-09
 */


namespace Konekt\Courier\Dpd\Transaction\FindSite;


use Konekt\Courier\Common\RequestInterface;

class FindSiteRequest implements RequestInterface
{
    /** @var string */
    private $name;

    /** @var string */
    private $region;

    /**
     * FindSiteRequest constructor.
     *
     * @param string $name
     * @param string $region
     */
    public function __construct(string $name, string $region)
    {
        $this->name = $name;
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
}