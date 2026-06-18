<?php

namespace App\Tests\Unit;

use App\Entity\Fiche;
use App\Entity\Historique;
use App\Entity\FicheMotCle;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FicheTest extends KernelTestCase
{
    public function getEntity() : Fiche
    {
        return (new Fiche())
            ->setRefer('Refer #1')
            ->setDenomination('Denomination #1')
            ->setTexte('Test #1')
            ->setEdition('Edition #1')
            ->setVisible(true);
    }

    public function testEntityIsValid(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        
        $fiche = $this->getEntity();

        $errors = $container->get('validator')->validate($fiche);

        $this->assertCount(0, $errors);

    }

    public function testInvalidText()
    {
        self::bootKernel();
        $container = static::getContainer();

        $fiche =$this->getEntity();
        $fiche->setTexte('');

        $errors = $container->get('validator')->validate($fiche);

        $this->assertCount(0, $errors);
    }
    

    public function testAddHistorique()
    {
        self::bootKernel();
        $container = static::getContainer();

        $fiche = $this->getEntity();

        $historique = new Historique();
        $fiche->addHistorique($historique);

        $errors = $container->get('validator')->validate($fiche);
        $this->assertCount(0, $errors);

        $this->assertTrue($fiche->getHistoriques()->contains($historique));

    }

    public function testAddFicheMotCle(): void
    {
        self::bootKernel();
        $container = static::getContainer();

        $fiche = $this->getEntity();
        $ficheMotCle = new FicheMotCle();
        $fiche->addFicheMotCle($ficheMotCle);

        $errors = $container->get('validator')->validate($fiche);
        $this->assertCount(0, $errors);

        $this->assertTrue($fiche->getFicheMotCles()->contains($ficheMotCle));

        $this->assertSame($fiche, $ficheMotCle->getFiche());

    }
 

}
