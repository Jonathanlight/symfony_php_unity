<?php

namespace App\Form;

use App\Entity\Conference;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConferenceType extends AbstractType
{

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Conference::class,
        ]);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'form.title',
                    'class' => 'form-control',
                ],
            ])
            ->add('location', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'form.location',
                    'class' => 'form-control',
                ],
            ])
            ->add('created', DateType::class, [
                'label' => false,
                'html5' => false,
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'form.created',
                    'class' => 'form-control datepicker',
                ],
            ])
            ->add('price', NumberType::class, [
                'label' => false,
                'attr' => [
                    'required' => false,
                    'placeholder' => 'form.price',
                    'class' => 'form-control',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'form.action.submit',
                'attr' => [
                    'class' => 'btn btn-lg btn-primary',
                ]
            ])
        ;
    }
}
