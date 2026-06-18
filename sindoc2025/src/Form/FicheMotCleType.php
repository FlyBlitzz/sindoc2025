<?php

namespace App\Form;
use App\Entity\Livre;
use App\Entity\MotCle;
use App\Entity\FicheMotCle;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FicheMotCleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $livreAssocie = $options['livreAssocie'];

        $builder
            ->add('motCle', EntityType::class, [  // <-- Changed from 'ficheMotCles' to 'motCle'
                'class' => MotCle::class,
                'choice_label' => function (MotCle $motCle) {
                    return $motCle->getReference() . ' : ' . $motCle->getDenomination();
                },
                'query_builder' => function (EntityRepository $er) use ($livreAssocie) {
                    return $er->createQueryBuilder('mc')
                        ->join('mc.index', 'i')
                        ->join('i.livres', 'l')
                        ->where('l = :livre')
                        ->setParameter('livre', $livreAssocie)
                        ->orderBy('mc.reference', 'ASC');
                },
                'attr' => [
                    'class' => 'select2 motCles',
                ],
                'empty_data' => null, // <-- Changed to null since it's an entity
            ])
            ->add('precision', TextType::class, [
                'attr' => [
                    'class' => 'precision',
                ],
                'empty_data' => '',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FicheMotCle::class,  // <-- Corrected to match the entity
        ]);
        
        $resolver->setRequired('livreAssocie');
        $resolver->addAllowedTypes('livreAssocie', Livre::class);
    }
}