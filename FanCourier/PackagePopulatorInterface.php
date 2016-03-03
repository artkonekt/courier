<?php
/**
 * Contains interface PackageMapper
 *
 * @package     Konekt\Courier\FanCourier\Integration
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;

interface PackagePopulatorInterface
{
    public function populate($packageId, Package $package);
}