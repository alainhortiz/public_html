<?php

namespace App\Form;

use App\Entity\SolicitarRecogida;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitarRecogidaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre de la Empresa Encargada para la Recogida',
                    'name' => 'nombre',
                ]
            ])
            ->add('fecha', DateType::class, [
                'label' => false,
                'html5' => true,
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'fecha'
                ],
            ])
            ->add('hora', TimeType::class, [
                'label' => true,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'hora'
                ],
            ])
            ->add('horafinal', TimeType::class, [
                'label' => true,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'horafinal'
                ],
            ])
            ->add('numeroenvio', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de Envio',
                    'name' => 'numeroenvio',
                ]
            ])
            ->add('estado', ChoiceType::class, [
                'label' => false,
                'required' => false,
                'choices' => [
                    'Sin Aprobar' => 'sinaprobar',
                    'Aprobada' => 'aprobada'
                ],
                'placeholder' => 'Estado',
                'attr' => [
                    'class' => 'form-control',
                    'name' => 'estado',
                ]
            ])
            ->add('usuarioid', EntityType::class, [
                'label' => 'Usuarios Asignar',
                'class' => User::class,
                'required' => false,
                'choice_label' => 'nombre',
                'query_builder' => function (UserRepository $use) {
                    return $use->createQueryBuilder('u')
                        ->where("u.roles = JSON_ARRAY('ROLE_USER')");
                },
                'multiple' => false,
                'mapped' => false,
                'placeholder' => 'Listado de Usuarios',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SolicitarRecogida::class,
        ]);
    }
}
