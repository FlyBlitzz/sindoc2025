<?php

namespace App\Tests\Integration;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ORM\EntityManagerInterface;

class CreateTest extends KernelTestCase
{
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }

    public function testCreateUser()
{

    $user = new User();
    $user->setUsername('usertest');
    $user->setPassword('password');
    $user->setActive(true);
    $user->setValide(true);


    $this->entityManager->persist($user);
    $this->entityManager->flush();

    $this->assertNotNull($user->getId()); 
    $this->assertSame('usertest', $user->getUsername());
    $this->assertTrue($user->isActive());
    $this->assertTrue($user->isValide());

    $this->entityManager->remove($user);
    $this->entityManager->flush();
}

}
