<?php

/**
 * Contains class PackageStatus
 *
 * @package     FanCourier\Transaction\TrackPackage
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-09-13
 */


namespace Konekt\Courier\FanCourier\Transaction\TrackPackage;


use Konekt\Enum\Enum;

class PackageState extends Enum
{
    const __default = self::UNKNOWN;

    const UNKNOWN = -1;

    const AWB_NU_A_FOST_PREDAT_CATRE_FANCOURIER = 0;

    const EXPEDITIE_IN_LIVRARE = 1;

    const LIVRAT = 2;

    const AVIZAT = 3;

    const REFUZ_PRIMIRE = 6;

    const REFUZ_PLATA_TRANSPORT = 7;

    const LIVRARE_DIN_SEDIUL_FAN_COURIER = 8;

    const REDIRECTIONAT = 9;

    const CONTACTAT_LIVRARE_ULTERIOARA = 12;

    const RESTRICTII_ACCES_LA_ADRESA = 14;

    const REFUZ_PLATA_RAMBURS = 15;

    const AWB_NEEXPEDIAT = 38;

    const ADRESA_GRESITA = 42;

    const RETUR = 43;
}