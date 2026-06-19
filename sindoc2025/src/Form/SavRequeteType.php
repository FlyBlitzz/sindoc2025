<?php

namespace App\Form;

use App\Entity\SavRequete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class SavRequeteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_requete', null, [
                'label' => 'Nom requête',
                'constraints' => [
                    new Regex(pattern: '/\b(ou|et|not)\b/i', match: false, message: 'Le nom de la requête ne doit pas contenir " ou ", " et ", " OU ", " ET ", " NOT ".'),
                    new Regex(pattern: '/^[a-zA-Z0-9_-]+$/', message: 'Le nom de la requête ne doit contenir que des lettres, chiffres, underscores et tirets, sans espaces ni caractères spéciaux.')
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SavRequete::class,
        ]);
    }
}