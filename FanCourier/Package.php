<?php
/**
 * Contains class Package
 *
 * @package     Konekt\Courier\FanCourier
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas
 * @license     MIT
 * @since       2016-02-24
 * @version     2016-02-24
 */

namespace Konekt\Courier\FanCourier;

//use FanCourier\Plugin\csv\csvItem;

class Package
{
    public $tip;

    public $nr_plic;
    public $nr_colet;
    public $greutate;

    public $plata_expeditii;
    public $ramburs;
    public $plata_ramburs_la;
    public $valoare;

    public $persoana_contact_expeditor;

    public $observatii;

    public $continut;

    public $nume_destinatar;
    public $persoana_contact;
    public $telefon;
    public $fax;
    public $email;
    public $judet;
    public $localitate;
    public $strada;
    public $nr;
    public $zip;
    public $bloc;
    public $scara;
    public $etaj;
    public $apartament;

    public $inaltime_pachet;
    public $latime_pachet;
    public $lungime_pachet;

    public $restituire;
    public $centru_cost;

    public $optiuni;

    public $packing;

    public $date_personale;

    //public static function createCsvItem(Package $awb)
    //{
    //    $item = csvItem::newItem();
    //    $item->setItems($awb->toArray());
    //
    //    return $item;
    //}
    //
    //private function unaccent($string)
    //{
    //    $accentMap = ['ă' => 'a', 'â' => 'a', 'î' => 'i', 'ț' => 't', 'ș' => 's'];
    //    return strtr($string, $accentMap);
    //}
    //
    //public function toArray()
    //{
    //    $array = (array) $this;
    //    $array['judet'] = $this->unaccent($this->judet);
    //    $array['localitate'] = $this->unaccent($this->localitate);
    //    return $array;
    //}
}