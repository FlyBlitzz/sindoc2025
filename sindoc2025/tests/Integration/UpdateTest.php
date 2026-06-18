<?php

namespace App\Tests\Integration;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ORM\EntityManagerInterface;

class UpdateTest extends KernelTestCase
{
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }

    public function testUpdateUser()
    {
        $user = new User();
        $user->setUsername('originaluser');
        $user->setPassword('originalpassword');
        $user->setActive(true);
        $user->setValide(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->assertNotNull($user->getId());
        $this->assertSame('originaluser', $user->getUsername());

        $user->setUsername('updateduser');
        $user->setPassword('updatedpassword');
        $user->setActive(false);
        $user->setValide(false);

        $this->entityManager->flush();

        $updatedUser = $this->entityManager->getRepository(User::class)->find($user->getId());

        $this->assertSame('updateduser', $updatedUser->getUsername());
        $this->assertSame('updatedpassword', $updatedUser->getPassword());
        $this->assertFalse($updatedUser->isActive());
        $this->assertFalse($updatedUser->isValide());

        $this->entityManager->remove($updatedUser);
        $this->entityManager->flush();
    }


}
