<?php

namespace App\Form;

use App\Entity\Producto;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;

class ProductoType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Teclee el nombre',
                    'name' => 'nombre',
                ]
            ])
            ->add('imagen', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Selccione una imagen '
                ]
            ])
            ->add('beneficioxventa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Beneficio por venta',
                    'name' => 'beneficioxventa',

                ]
            ])
            ->add('tipoProducto', HiddenType::class, [
                'required' => false,
                'empty_data' => '1',
            ])
            ->add('tipodemoneda', HiddenType::class, [
                'required' => false,
                'empty_data' => 'USD',
            ])
            ->add('idd', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Teclee el I.D.',
                    'name' => 'idd',
                ]
            ])
            ->add('stock', TextType::class, [
                'label' => false,
                'required' => false,
                'empty_data' => '0',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Stock',
                    'name' => 'stock',
                ]
            ])
            ->add('stockAdvertencia', TextType::class, [
                'label' => false,
                'required' => false,
                'empty_data' => '0',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Aviso stock',
                    'name' => 'stockAdvertencia',
                ]
            ])
            ->add('conceptoServicio', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Concepto del servicio',
                    'name' => 'conceptoServicio',
                ]
            ])
            ->add('descripcionServicio', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Descripción del servicio',
                    'name' => 'descripcionServicio',
                ]
            ])
            ->add('documentoServicio', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Por favor agregue el documento',
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Adjuntar documento del servicio'
                ]
            ])
            ->add('user', EntityType::class, [
                'label' => 'Listado de Usuarios',
                'class' => User::class,
                'required' => false,
                'choice_label' => 'nombre',
                'query_builder' => function (UserRepository $use) {
                    return $use->createQueryBuilder('u')
                        ->where("u.roles = JSON_ARRAY('ROLE_USER')")
                        ->andWhere("u.isActive = true");
                },
                'multiple' => false,
                'mapped' => false,
                'placeholder' => 'Listado de Usuarios',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);

    }

    public
    function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);

    }
}
