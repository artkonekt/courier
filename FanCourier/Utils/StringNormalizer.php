<?php
/**
 * Contains class StringNormalizer
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-03-14
 * @version     2016-03-14
 */

namespace Konekt\Courier\FanCourier\Utils;


class StringNormalizer
{
    /**
     * Removes romanian accent from a string. Fancourier API needs this normalization for some parameters.
     *
     * @param $string
     *
     * @return string
     */
    public function unaccent($string)
    {
        $accentMap = ['ă' => 'a', 'â' => 'a', 'î' => 'i', 'ț' => 't', 'ș' => 's'];

        return strtr($string, $accentMap);
    }
}