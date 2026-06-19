<?php

namespace App\Form;

use App\Entity\Fiche;
use App\Entity\Livre;
use App\Entity\MotCle;
use App\Entity\Statut;
use App\Repository\StatutRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Type;

class RechercheFicheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $livreAssocie = $options['livreAssocie'];

        $builder
            ->add('num_fiche', IntegerType::class, [
                'label' => 'Numéro de fiche',
                'attr' => [
                    'min' => 1,  // Only positive numbers
                    'step' => 1, // No decimals
                ],
                'constraints' => [
                    new Type(type: 'integer', message: 'Entrez un numéro de fiche valide.'),
                    new Positive(message: 'Le numéro de fiche doit etre positif.')
                ],
            ])

            // ->add('id', null, [
            //     'label' => 'Numéro de fiche',
            //     // 'attr' => [
            //     //     'min' => 1,  // Only positive numbers
            //     //     'step' => 1, // No decimals
            //     // ],
            //     // 'constraints' => [
            //     //     new Type(type: 'integer', message: 'Entrez un numéro de fiche valide.'),
            //     //     new Positive(message: 'Le numéro de fiche doit etre positif.')
            //     // ],
            // ])
            ->add('refer', null, [
                'label' => 'Référence',
            ])
            ->add('edition')
            ->add('refer_bis')
            ->add('denomination')
            ->add('statut', EntityType::class, [
                'class' => Statut::class,
                'choice_label' => 'denomination', // Attribut à afficher dans la liste
                'query_builder' => function (StatutRepository $repo) {
                    return $repo->createQueryBuilder('l')
                        ->orderBy('l.denomination', 'ASC'); // Trie par nom (ordre alphabétique)
                },
                'placeholder' => '-- Sélectionner un statut --', // Optionnelle
            ])
            ->add('texte')
            ->add('traduction')
            ->add('notes')
            ->add('commentaire')
            ->add('visible')
            ->add('user', null, [
                'label' => false, // Cela désactive le label du champ 'user'
                'attr' => ['style' => 'display:none;'] // Cela rend le champ 'user' caché
            ])
            ->add('motCles', EntityType::class, [
                'class' => MotCle::class,
                'choice_label' => function (MotCle $motCle) {
                    return sprintf('%s - %s', $motCle->getReference(), $motCle->getDenomination());
                },
                'expanded' => false,
                'multiple' => true,
                'required' => false,
                'query_builder' => function (EntityRepository $er) use ($livreAssocie) {
                    return $er->createQueryBuilder('mc')
                        ->join('mc.index', 'i')
                        ->join('i.livres', 'l') // Assurez-vous que c'est le bon chemin pour atteindre Livre depuis Index
                        ->where('l = :livre')
                        ->orderBy('mc.reference', 'ASC')
                        ->setParameter('livre', $livreAssocie);
                },
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
                'help' => 'Votre formule doit s\'écrire comme suite : "mot1 ET mot2" ou  "(mot1 OU mot2)ET mot3" ou "(mot1 OU mot2)ET(mot4 ET mot5 ) ou NOT mot1 ET NOT mot2" ',

            ])


            ->add(child: 'rechercher', type: SubmitType::class)



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fiche::class,
            'livreAssocie' => null,
        ]);

        $resolver->setRequired('livreAssocie'); // Ajoutez cette ligne pour déclarer l'option comme requise
        $resolver->addAllowedTypes('livreAssocie', Livre::class);
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