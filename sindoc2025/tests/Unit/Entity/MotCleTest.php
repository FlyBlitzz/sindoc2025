<?php

namespace App\Tests\Entity;

use App\Entity\MotCle;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MotCleTest extends KernelTestCase
{
    public function getEntity(): MotCle
    {
        return (new MotCle())
            ->setReference('Ref #1')
            ->setDenomination('Denomination #1');
    }

    public function testEntityIsValid(): void
    {
        self::bootKernel();
        $container = static::getContainer();

        $motCle = $this->getEntity();

        $errors = $container->get('validator')->validate($motCle);

        $this->assertCount(0, $errors);
    }

}
