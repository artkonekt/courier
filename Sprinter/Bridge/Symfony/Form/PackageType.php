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

use Konekt\Courier\Sprinter\Model\Package;
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
            ->add('parcelCount', 'text', [
                'label' => 'Csomagok száma',
                'required' => true
            ])
            ->add('authorizationCode', 'text', [
                'label' => 'Rendelés azonosító',
                'required' => true
            ])
            ->add('customerName', 'text', [
                'label' => 'Ügyfél neve',
                'required' => true
            ])
            ->add('customerPostalCode', 'text', [
                'label' => 'Ügyfél irányítószáma',
                'required' => true
            ])
            ->add('customerCity', 'text', [
                'label' => 'Ügyfél települése',
                'required' => true
            ])
            ->add('customerAddress', 'text', [
                'label' => 'Ügyfél címe',
                'required' => true
            ])
            ->add('customerPhone', 'text', [
                'label' => 'Ügyfél telefonszáma',
                'required' => true
            ])
            ->add('customerEmail', 'text', [
                'label' => 'Ügyfél email címe',
                'required' => true
            ])
            ->add('packagePrice', 'text', [
                'label' => 'Csomag értéke',
                'required' => true
            ])
            ->add('priceAtDelivery', 'text', [
                'label' => 'Átvételkor fizetendő díj',
                'required' => true
            ])
            ->add('isPartnerInvoiced', 'checkbox', [
                'label' => 'Partner felé kell-e a számlát kiállítani',
                'required' => false
            ])
            ->add('packageType', 'choice', [
                'label' => 'Csomag típusa',
                'required' => true,
                'choices' => Package::PACKAGE_TYPES
            ]);

        $builder->add('save', new SubmitType(), [
            'label' => 'Csomag bejegyzése'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sprinter_package_type';
    }
}