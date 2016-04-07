<?php
/**
 * Contains class PackagePPPType
 *
 * @package     courier\Sprinter\Bridge\Symfony\Form
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-07
 * @version     2016-04-07
 */

namespace Konekt\Courier\Sprinter\Bridge\Symfony\Form;

use Symfony\Component\Form\FormBuilderInterface;

class PackagePPPType extends PackageType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('destinationLocationId', 'text', ['label' => 'destinationLocationId', 'required' => true]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sprinter_ppp_package_type';
    }
}