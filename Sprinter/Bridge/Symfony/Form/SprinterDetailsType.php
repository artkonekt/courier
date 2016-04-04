<?php
/**
 * Contains class SprinterDetailsType
 *
 * @package     AppBundle\Form\Type
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-01
 * @version     2016-04-01
 */

namespace Konekt\Courier\Sprinter\Bridge\Symfony\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SprinterDetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$data = $options['data'];

        $builder->add('note', 'text', [
            //'empty_data' => $data['note']
        ]);
        $builder->add('county', 'text');
        $builder->add('city', 'text');
        $builder->add('point', 'text');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sprinter_type';
    }
}