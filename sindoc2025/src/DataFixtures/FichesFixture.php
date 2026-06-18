<?php

use App\Entity\Fiche;
use App\Entity\Livre;
use App\Entity\MotCle;
use App\Entity\Statut;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FichesFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Create related entities if needed (Livre, Statut, User, MotCle)
        $livre = new Livre();
        $livre->setNom('Sample Livre');
        $manager->persist($livre);

        $statut = new Statut();
        $statut->setDenomination('Draft');
        $manager->persist($statut);

        $user = new User();
        $user->setUsername('TestUser');
        $manager->persist($user);

        $motCle1 = new MotCle();
        $motCle1->setDenomination('110a');
        $manager->persist($motCle1);

        $motCle2 = new MotCle();
        $motCle2->setDenomination('340g');
        $manager->persist($motCle2);

        // Create Fiche entities
        for ($i = 1; $i <= 5; $i++) {
            $fiche = new Fiche();
            $fiche->setRefer('REF-' . $i);
            $fiche->setReferBis('REF-BIS-' . $i);
            $fiche->setDenomination('Denomination ' . $i);
            $fiche->setTexte('This is a sample text for fiche ' . $i);
            $fiche->setTraduction('Sample translation for fiche ' . $i);
            $fiche->setNotes('Notes for fiche ' . $i);
            $fiche->setEdition('Edition ' . $i);
            $fiche->setCommentaire('Commentary for fiche ' . $i);
            $fiche->setNumFiche(mt_rand(1000, 9999));
            $fiche->setVisible($i % 2 === 0); // Alternate visibility

            $fiche->setStatut($statut);
            $fiche->setLivre($livre);
            $fiche->setUser($user);

            // Add some keywords
            $fiche->addMotCle($motCle1);
            if ($i % 2 === 0) {
                $fiche->addMotCle($motCle2);
            }

            $manager->persist($fiche);
        }

        $manager->flush();
    
    }
}