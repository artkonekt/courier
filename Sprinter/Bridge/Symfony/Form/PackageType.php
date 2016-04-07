<?php
/**
 * Contains class PackageType
 *
 * @package     courier\Sprinter\Bridge\Symfony\Form
 * @copyright   Copyright (c) 2016 Storm Storez Srl-D
 * @author      Lajos Fazakas <lajos@artkonekt.com>
 * @license     Proprietary
 * @since       2016-04-05
 * @version     2016-04-05
 */

namespace Konekt\Courier\Sprinter\Bridge\Symfony\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class PackageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parcelCount', 'text', ['label' => 'parcelCount', 'required' => true])
            ->add('authorizationCode', 'text', ['label' => 'authorizationCode', 'required' => true])
            ->add('customerName', 'text', ['label' => 'customerName', 'required' => true])
            ->add('customerPostalCode', 'text', ['label' => 'customerPostalCode', 'required' => true])
            ->add('customerCity', 'text', ['label' => 'customerCity', 'required' => true])
            ->add('customerAddress', 'text', ['label' => 'customerAddress', 'required' => true])
            ->add('customerPhone', 'text', ['label' => 'customerPhone', 'required' => true])
            ->add('customerEmail', 'text', ['label' => 'customerEmail', 'required' => true])
            ->add('packagePrice', 'text', ['label' => 'packagePrice', 'required' => true])
            ->add('priceAtDelivery', 'text', ['label' => 'priceAtDelivery', 'required' => true])
            ->add('isPartnerInvoiced', 'checkbox', ['label' => 'isPartnerInvoiced', 'required' => false])
            ->add('packageType', 'text', ['label' => 'packageType', 'required' => true])
        ;

        $builder->add('save', new SubmitType(), array('label' => 'Csomag bejegyzése'));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sprinter_package_type';
    }
}