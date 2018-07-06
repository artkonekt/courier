<?php
/**
 * Contains interface PackagePopulatorInterface
 *
 * @package     Konekt\Courier\Dpd
 * @copyright   Copyright (c) 2018 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2018-07-06
 * @version     2018-07-06
 */

namespace Konekt\Courier\Dpd;

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