<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class UserTypeEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
            'label' => 'Identifiant',
            ])
             ->add('roles', ChoiceType::class, [
                           'multiple' => true,
                           'choices' => [
                               'Role utilisateur' => 'ROLE_USER',
                               'Role administrateur' => 'ROLE_ADMIN',
                           ],
                       ])
            // ->add('password',PasswordType::class, [
            //  'label' => 'Mot de passe',
            //  'constraints' => [
            //                      new Regex('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{10,}$/',
            //                      'Il faut un mot de passe de 10 caractéres avec 1 majuscule, 1 minuscule, 1 chiffre et 1 caractére spécial'
            //                      )
            //                  ],
            //  ])
            //  ->add('password', RepeatedType::class, [
            //      'type' => PasswordType::class,
            //      'invalid_message' => 'Les champs de mot de passe doivent correspondre.',
            //      'options' => ['attr' => ['class' => 'password-field']],
            //      'required' => false,
            //      'first_options'  => ['label' => 'Mot de passe'],
            //      'second_options' => ['label' => 'Confirmer le mot de passe'],
            //      'constraints' => [
            //          new Regex([
            //              'pattern' => '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{10,}$/',
            //              'message' => 'Il faut un mot de passe de 10 caractères avec 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial'
            //          ]),
            //      ],
            //  ])




        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}