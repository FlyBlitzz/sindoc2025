<?php

namespace App\Form;

use App\Entity\SavRequete;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType; // Utilisez ButtonType au lieu de Button
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SavreqRechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
            $user = $options['user'];

        $builder
            ->add('nom_requete', EntityType::class, [
                'class' => SavRequete::class,
                'label' => 'Veuillez choisir une requête ',
                'placeholder' => '',
                'choice_label' => 'nom_requete',
                'attr' => [
                    'class' => ' select2 motClesSelect',
                ],
                'choice_attr' => function ($choice, $key, $value) {
                    return ['data-reference' => $choice->getNomRequete()];
                },
                'query_builder' => function(EntityRepository $er) use ($user) {
                            return $er->createQueryBuilder('r')
                                ->andWhere('r.user = :user')
                                ->setParameter('user', $user);
                        },

            ])
              ->add('et', ButtonType::class, [
                    'label' => 'ET',
                    'attr' => [
                        'class' => 'btn btn-secondary buttonET', // Ajoutez des classes CSS au besoin
                    ],
                    'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
                ])
                ->add('ou', ButtonType::class, [
                    'label' => 'OU',
                    'attr' => [
                        'class' => 'btn btn-secondary buttonOU', // Ajoutez des classes CSS au besoin
                    ],
                    'row_attr' => ['class' => 'inline-button savreq-form'], // pour afficher le bouton sur la même ligne
                ])
                ->add('non', ButtonType::class, [
                    'label' => 'NOT',
                    'attr' => [
                        'class' => 'btn btn-secondary buttonNOT', // Ajoutez des classes CSS au besoin
                    ],
                    'row_attr' => ['class' => 'inline-button savreq-form'], // pour afficher le bouton sur la même ligne
                ])
            ->add('supprimer', ButtonType::class, [
                'label' => 'Supprimer',
                'attr' => [
                    'class' => 'btn btn-danger supprimer-btn supprimerContenu',
                ],
                'row_attr' => ['class' => 'inline-button'],
            ])
             ->add('requeteRechercher', TextType::class, [
                            'label' => false,
                            'mapped' => false,
                            'required' => true,
                            'constraints' => [new NotBlank([
                                'message' => "Veuillez specifier une requête de recherche"
                            ]), 
                            new \Symfony\Component\Validator\Constraints\Callback([
                                'callback' => function ($value, ExecutionContextInterface $context) {
                                    if (empty($value)) {
                                        return;
                                    }
                    
                                    // Updated regex:
        // $pattern = '/^(NOT\s+)?[A-Za-zÀ-ÖØ-öø-ÿ0-9]+(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ0-9]+)?'
        // . '(?:\s+(ET|OU)\s+(NOT\s+)?[A-Za-zÀ-ÖØ-öø-ÿ0-9]+(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ0-9]+)*)*$/u';
        $pattern = '/^(NOT\s+)?[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+)?'
        . '(?:\s+(ET|OU)\s+(NOT\s+)?[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+)*)*$/u';

// Prevent ending with a logical operator
if (!preg_match($pattern, trim($value)) || preg_match('/\b(ET|OU|NOT)\s*$/u', trim($value))) {
   $context->buildViolation('L\'expression logique "{{ string }}" est invalide.')
       ->setParameter('{{ string }}', $value)
       ->addViolation();
}
// Extract all operand names (excluding logical operators)
preg_match_all('/\b(?!ET\b|OU\b|NOT\b)[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ0-9_-]+)?\b/u', $value, $matches);
$operands = array_map('strtolower', $matches[0]); // Normalize to lowercase for case-insensitive comparison

// Check for duplicate operand names
if (count($operands) !== count(array_unique($operands))) {
    $context->buildViolation('Une requête ne peut pas être utilisée plusieurs fois : "{{ string }}"')
        ->setParameter('{{ string }}', $value)
        ->addViolation();
}
                                }
                            ]),
                        ], 
                            'help' => 'Votre formule doit s\'écrire comme suit : "requête 1 ET requête 2" ou "requête 1 OU requête 2" ou "NOT requête 1 ET requête 2"',
                        ])
                ->add(child:'rechercher', type:SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'user' => null,
        ]);
    }

}
