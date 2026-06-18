<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SelectLivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $livres = $options['livres'];
        $builder
            ->add('livre', EntityType::class, [
                'class' => Livre::class,
                'choices' => $livres,
                'label' => 'Veuillez choisir un livre ',
                'choice_label' => 'nom',  // Remplacez 'nom' par le champ que vous souhaitez afficher
                'attr' => [
                    'class' => 'livre',
                ],
                ])
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'livres' => [], // Ajoutez cette option pour passer les livres au formulaire
        ]);
    }
}
