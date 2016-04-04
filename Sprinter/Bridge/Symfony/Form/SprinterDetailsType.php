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
use Symfony\Component\Validator\Constraints\NotBlank;

class SprinterDetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code', 'hidden', [
            'constraints' => [
                new NotBlank(['message' => 'Choose a Pick Pack Point'])
            ]
        ]);
        $builder->add('address', 'hidden');
        $builder->add('map', 'hidden', [
            'mapped' => false
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sprinter_type';
    }
}