<?php

namespace App\Repository;

use App\Entity\FicheMotCle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FicheMotCle>
 *
 * @method FicheMotCle|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheMotCle|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheMotCle[]    findAll()
 * @method FicheMotCle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheMotCleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheMotCle::class);
    }

//    /**
//     * @return FicheMotCle[] Returns an array of FicheMotCle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FicheMotCle
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


public function existsByMotCle(string $motCle): bool
{
    $ficheMotCle = $this->createQueryBuilder('fmc')
        ->select('COUNT(fmc.id)')
        ->andWhere('fmc.motCle = :motCle')
        ->setParameter('motCle', $motCle)
        ->getQuery()
        ->getSingleScalarResult();

    return (bool) $ficheMotCle;
}

}