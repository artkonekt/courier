<?php
/**
 * Contains class NoopDetails
 *
 * @package     AppBundle\Form\Type
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-01
 * @version     2016-04-01
 */

namespace Konekt\Courier\Noop\Bridge\Symfony\Form;


use Symfony\Component\Form\AbstractType;

class NoopDetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'noop_type';
    }
}