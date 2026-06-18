<?php


namespace App\Form;


use App\Entity\Fiche;
use App\Entity\Livre;
use App\Entity\Statut;
use App\Form\FicheMotCleType as FormFicheMotCleType;
use App\Repository\StatutRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class FicheType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options): void
   {
       $livreAssocie = $options['livreAssocie'];


       $builder
           ->add('refer', null, [
                'label' => 'Référence (*)',
               'constraints' => [
                   new NotBlank([
                       'message' => 'Ce champ est obligatoire. Il doit �tre rempli.',
                   ]),
               ],
           ])
           ->add('edition', TextType::class, [
               'required' => false, // Permet d'envoyer un champ vide
               'empty_data' => '',  // Remplace `null` par une chaîne vide
           ])
           ->add('refer_bis', TextType::class, [
               'required' => false,])
           ->add('denomination', null, [
            'label' => 'Dénomination (*)',
           'constraints' => [
               new NotBlank([
                           'message' => 'Ce champ est obligatoire. Veuillez donner une denomination.',
               ]),
            ],
           ])
           ->add('statut', EntityType::class, [
               'label' => 'Statut (*)',
               'class' => Statut::class,
               'choice_label' => 'denomination', // Attribut à afficher dans la liste
               'query_builder' => function (StatutRepository $repo) {
                   return $repo->createQueryBuilder('l')
                       ->orderBy('l.denomination', 'ASC'); // Trie par nom (ordre alphabétique)
               },
               'constraints' => [
                   new NotBlank([
                       'message' => 'Ce champ est obligatoire. Veuillez choisir un statut.',
                   ]),
               ],
               'placeholder' => '-- Sélectionner un statut --', // Optionnelle
           ])
//           ->add('texte', TextareaType::class, [
//               'required' => false, // Permet d'envoyer un champ vide
//               'empty_data' => '',  // Remplace `null` par une chaîne vide
//           ])
//           ->add('traduction', TextareaType::class, [
//               'required' => false, // Permet d'envoyer un champ vide
//               'empty_data' => '',  // Remplace `null` par une chaîne vide
//           ])
//           ->add('notes',TextareaType::class, [
//               'required' => false, // Permet d'envoyer un champ vide
//               'empty_data' => '',  // Remplace `null` par une chaîne vide
//           ])
           //->add('commentaire', TextareaType::class, [
           //    'required' => false, // Permet d'envoyer un champ vide
           //    'empty_data' => '',  // Remplace `null` par une chaîne vide
           //])
           
           ->add('texte', TextareaType::class, [
                'label' => 'Texte',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'class' => 'ckeditor-field', // ? TA CLASSE EXISTANTE
                    'rows' => 5,
                ]
            ])
           
            ->add('traduction', TextareaType::class, [
                'label' => 'Traduction',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'class' => 'ckeditor-field', // ? TA CLASSE EXISTANTE
                    'rows' => 5,
                ]
            ])
              
           ->add('notes', TextareaType::class, [
                'label' => 'Notes',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'class' => 'ckeditor-field', // ? TA CLASSE EXISTANTE
                    'rows' => 5,
                ]
            ])
                              
           ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'class' => 'ckeditor-field', // ← TA CLASSE EXISTANTE
                    'rows' => 5,
                ]
            ])
               ->add('num_fiche')
           ->add('visible')
           ->add('user', null, [
               'label' => false, // Cela d�sactive le label du champ 'user'
               'attr' => ['style' => 'display:none;'] // Cela rend le champ 'user' cach�
           ])
           ->add('ficheMotCles', CollectionType::class, [
            'entry_type' => FormFicheMotCleType::class,
            // 'choice_label' => function ($motCle) {
            //     return $motCle->getReference() . ' : ' . $motCle->getDenomination();
            // },
            'entry_options' => [
                'label' => false, // Supprimer le label pour les champs imbriqués
                'livreAssocie' => $livreAssocie,
            ],
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
        ])
        ->add('plus', ButtonType::class, [
            'label' => 'Ajouter un mot cle',

            'attr' => [
                'class' => 'add_item_link btn-primary',
                'data-collection-holder-class' => "ficheMotCles"
            ],
         ])

           ->add(child:'Ajouter', type:SubmitType::class)
       ;
   }


   public function configureOptions(OptionsResolver $resolver): void
   {
       $resolver->setDefaults([
           'data_class' => Fiche::class,
           'livreAssocie' => null,
       ]);


       $resolver->setRequired('livreAssocie');
       $resolver->addAllowedTypes('livreAssocie', Livre::class);
   }
}
