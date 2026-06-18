<?php

namespace App\Repository;

use App\Entity\IndexAuth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IndexAuth>
 *
 * @method IndexAuth|null find($id, $lockMode = null, $lockVersion = null)
 * @method IndexAuth|null findOneBy(array $criteria, array $orderBy = null)
 * @method IndexAuth[]    findAll()
 * @method IndexAuth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IndexAuthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IndexAuth::class);
    }

    public function save(IndexAuth $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(IndexAuth $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByUserAndIndex($userId, $indexId)
    {
        return $this->findOneBy([
            'user' => $userId,
            'index' => $indexId
        ]);
    }
}
