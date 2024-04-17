<?php

namespace App\Form;

use App\Entity\User;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre',
                    'name' => 'nombre',
                ]
            ])
            ->add('apellidos', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Apellidos',
                    'name' => 'apellidos',
                ]
            ])
            ->add('empresa', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Empresa',
                    'name' => 'empresa',
                ],
                'required' => false,
            ])
            ->add('nifcif', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'NIF/CIF',
                    'name' => 'nif',
                ],
                'required' => false,
            ])
            ->add('direccion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Direccion',
                    'name' => 'direccion',
                ]
            ])
            ->add('poblacion', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Poblacion',
                    'name' => 'poblacion',
                ]
            ])
            ->add('provincia', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Provincia',
                    'name' => 'provincia',
                ]
            ])
            ->add('pais', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Pais',
                    'name' => 'pais',
                ]
            ])
            ->add('telefono', NumberType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Telefono',
                    'name' => 'telefono',
                ],
                'required' => false,
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email(usuario)',
                    'name' => 'email',
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Contraseña',
                    'name' => 'password',
                ]
            ])
            ->add('emitirfactura', ChoiceType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'factura',
                ],
                'choices' => [
                    'Emitir Factura' => null,
                    'SI' => '1',
                    'NO' => '0',
                ],
                'multiple' => false,
            ])
            ->add('roles', ChoiceType::class, [
                'label' => false,
                'multiple' => false,
                'mapped' => false,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'roles',
                ],
                'choices' => [
                    'Roles' => 'Roles',
                    'Usuario' => 'ROLE_USER',
                    'Administrador' => 'ROLE_ADMIN',
                ],
            ])
            ->add('captcha', CaptchaType::class, ['attr' => ['class' => 'feedback-captcha']])
            ->add('isActive', HiddenType::class, [
                'required' => false,
                'empty_data' => '1',
            ])
            ->add('avatar', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
                'attr' => [
                    'class' => 'custom-file-input',
                    'placeholder' => 'Avatar'
                ]
            ]);

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
