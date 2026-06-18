<?php

namespace App\Tests\Integration;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Doctrine\ORM\EntityManagerInterface;

class ReadTest extends KernelTestCase
{
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }

    public function testReadAllUsers()
    {
        $users = $this->entityManager->getRepository(User::class)->findAll();
        $this->assertGreaterThan(0, count($users), "The user list should not be empty.");
    }

    public function testDeleteOneUser()
    {
        $user = new User();
        $user->setUsername('usertodelete');
        $user->setPassword('password');
        $user->setActive(true);
        $user->setValide(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->assertNotNull($user->getId());

        $username = $user->getUsername();

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        $deletedUser = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        $this->assertNull($deletedUser);
    }

}
