<?php

namespace App\Form;

use App\Entity\SolicitarPagoRoyalAcumulado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SolicitarPagoRoyalAcumuladoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $date = date('Y-m-d');

        $builder
            ->add('fecha', TextType::class, [
                'data' => $date,
                'attr' => [
                    'class' => 'form-control',
                    'disabled' => 'disabled',
                    'name' => 'fecha',
                ],
            ])
            ->add('royaltiespagar', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'royaltiesapagar',
                    'placeholder' => 'Royalties a Pagar',
                ],
            ])
            ->add('metododepago', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'metodopago',
                ],
                'choices' => SolicitarPagoRoyalAcumulado::METODO_PAGO,
                'multiple' => false,
            ])
            ->add('factura', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Por favor agregue una factura de pago',
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar factura de pago'
                ]
            ])
            ->add('estado', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'estado',
                ],
                'choices' => [
                    'Estado' => null,
                    'Aceptado' => 'aceptado',
                    'Pendiente' => 'pendiente',
                    'Cancelado' => 'cancelado',
                ],
                'multiple' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarPagoRoyalAcumulado::class,
        ]);
    }
}
