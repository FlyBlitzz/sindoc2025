<?php

namespace App\Repository;

use App\Entity\SavRequete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SavRequete>
 *
 * @method SavRequete|null find($id, $lockMode = null, $lockVersion = null)
 * @method SavRequete|null findOneBy(array $criteria, array $orderBy = null)
 * @method SavRequete[]    findAll()
 * @method SavRequete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SavRequeteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SavRequete::class);
    }

//    /**
//     * @return SavRequete[] Returns an array of SavRequete objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SavRequete
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
