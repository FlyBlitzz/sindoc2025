<?php

namespace App\Tests\Integration;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ORM\EntityManagerInterface;

class DeleteTest extends KernelTestCase
{
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }

    public function testDeleteUser()
    {
        $user = new User();
        $user->setUsername('usertodelete');
        $user->setPassword('password');
        $user->setActive(true);
        $user->setValide(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->assertNotNull($user->getId());

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        $deletedUser = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $user->getId()]);
        $this->assertNull($deletedUser);
    }

}
