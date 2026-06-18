<?php

namespace App\Tests\Entity;

use App\Entity\SavRequete;
use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class SavRequeteTest extends KernelTestCase
{
    public function getEntity(): SavRequete
    {
        return (new SavRequete())
            ->setNomRequete('Test requête')
            ->setRequete('INSERT INTO table')
            ->setCreateDate(new \DateTime())
            ->setHeure(new \DateTime())
            ->setUser(new User()); 
    }

    public function testEntityIsValid(): void
    {
        self::bootKernel();
        $container = static::getContainer();

        $savRequete = $this->getEntity();

        $errors = $container->get('validator')->validate($savRequete);

        $this->assertCount(0, $errors);
    }

    
    public function testInvalidNomRequete()
    {
        self::bootKernel();
        $container = static::getContainer();

        $savRequete = $this->getEntity();
        $savRequete->setNomRequete('');

        $errors = $container->get('validator')->validate($savRequete);

        $this->assertCount(1, $errors);
    }

}
