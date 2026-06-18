<?php

namespace App\Form;

use App\Entity\MotCle;
use App\Entity\SavRequete;
use App\Entity\Statut;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;
use Masterminds\HTML5\Entities;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SavreqEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $statuts = $options['statuts']; // This is passed from the controller
        $selectedStatut = $options['statut'];
        $builder
        ->add("nom_requete", TextType::class,[
            'label' => "Nom de la requête",
            'required' => true,
            'data' => $options["reqName"]
        ])
        ->add('num_fiche', null, [
            'label' => 'Numero de la fiche',
            'required' => false, 
            'data' => $options["num_fiche"]
        ])
        ->add('refer', null, [
            'label' => 'Référence',
            'required' => false, // Ensures this field is optional
        ])
        ->add('edition', null, [
            'label' => "Edition",
            'required' => false, // Ensures this field is optional
        ])
        ->add('refer_bis', null, [
            'label' => "Référence bis",
            'required' => false, // Ensures this field is optional
        ])
        ->add('denomination', null, [
            'label' => 'Dénomination',
            'required' => false, // Ensures this field is optional
        ])
        ->add('statut', ChoiceType::class, [
            'choices' => $statuts, // Directly use the full Statut objects
            'choice_label' => function (?Statut $statut) {
                return $statut ? $statut->getDenomination() : 'Aucun statut'; // Handle null values
            },
            'expanded' => false,
            'multiple' => false,
            'required' => false, // Allow null selection
            'label' => 'Statut', 
            'placeholder' => 'Sélectionnez un statut', // Optional placeholder for clarity
            'data' => $selectedStatut ?? null, // Ensure null is accepted if no statut is selected
        ])
        
            
            ->add('texte', null, [
                'required' => false, // Ensures this field is optional
            ])
            ->add('traduction', null, [
                'required' => false, // Ensures this field is optional
            ])
            ->add('notes', null, [
                'required' => false, // Ensures this field is optional
            ])
            ->add('commentaire', null, [
                'required' => false, // Ensures this field is optional
            ])
            ->add('motCles', EntityType::class, [
                'class' => MotCle::class,
                'choice_label' => function (MotCle $motCle) {
                    return sprintf('%s - %s',  $motCle->getReference(), $motCle->getDenomination());
                },
                'expanded' => false,
                'multiple' => true,
                'required' => false,
                'attr' => [
                    'class' => 'select2 motClesSelect',
                ],
                'label' => 'Mots Clés',

                'choice_attr' => function ($choice, $key, $value) {
                    return ['data-reference' => $choice->getReference()];
                },

            ])
            ->add('et', ButtonType::class, [
                'label' => 'ET',
                'attr' => [
                    'class' => 'btn btn-secondary  buttonET', // Ajoutez des classes CSS au besoin
                ],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])
            ->add('ou', SubmitType::class, [
                'label' => 'OU',
                'attr' => [
                    'class' => 'btn btn-secondary buttonOU', // Ajoutez des classes CSS au besoin
                ],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])
            ->add('not', SubmitType::class, [
                'label' => 'NOT',
                'attr' => [
                    'class' => 'btn btn-secondary buttonNOT', // Ajoutez des classes CSS au besoin
                ],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])
            ->add('ajouterParentheseGauche', ButtonType::class, [
                'label' => '(',
                'attr' => ['class' => 'btn btn-secondary  ajouter-parenthese-gauche-btn'],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])
            ->add('ajouterParentheseDroite', ButtonType::class, [
                'label' => ')',
                'attr' => ['class' => 'btn btn-secondary  ajouter-parenthese-droite-btn'],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])
            ->add('supprimer', ButtonType::class, [
                'label' => 'Supprimer',
                'attr' => [
                    'class' => 'btn btn-danger supprimer-btn supprimerContenu', // Ajoutez des classes CSS au besoin pour le style
                ],
                'row_attr' => ['class' => 'inline-button'], // pour afficher le bouton sur la même ligne
            ])

            ->add('motClesRechercher', TextType::class, [
                'label' => false,
                'mapped' => false,
                'required' => false,
                'data' => $options["data"]["MotCle"] ?? [],
                'help' => 'Votre formule doit s\'écrire comme suite : "mot1 ET mot2" ou  "(mot1 OU mot2)ET mot3" ou "(mot1 OU mot2)ET(mot4 ET mot5 )" ',

            ])
            // ->add(child:'Enregistrer', type:SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'data' => [],
            'statuts' => [],
            'statut' => null,
            'motCles' => null,
            'reqName' => null,
            'num_fiche' => null
        ]);
    }
    public function getDataAsArray($data): array
    {
        $dataArray = [];

        foreach ($this->getKeys() as $key) {
            $dataArray[$key] = $data->$key;
        }

        return $dataArray;
    }
}
