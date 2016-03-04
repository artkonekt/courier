<?php
/**
 * Contains interface PackagePopulatorInterface
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-02
 * @version     2016-03-02
 */

namespace Konekt\Courier\FanCourier;

/**
 * Provides a common interface for classes which deal with the population of a package's data by any third party.
 */
interface PackagePopulatorInterface
{
    /**
     * Populates the package with values.
     *
     * @param                                    $packageId The third party identifier of the package.
     * @param Package                            $package
     */
    public function populate($packageId, Package $package);
}