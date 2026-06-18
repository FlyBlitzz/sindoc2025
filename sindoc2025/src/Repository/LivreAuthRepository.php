<?php

namespace App\Repository;

use App\Entity\LivreAuth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LivreAuthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LivreAuth::class);
    }

    public function findPermissionsByUserAndLivre(User $user, Livre $livre): ?LivreAuth
    {
        return $this->findOneBy(['user' => $user, 'livre' => $livre]);
    }

    public function save(LivreAuth $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LivreAuth $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByUserAndLivre($userId, $livreId)
    {
        return $this->findOneBy([
            'user' => $userId,
            'livre' => $livreId
        ]);
    }
}
