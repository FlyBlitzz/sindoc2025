<?php

namespace App\Repository;

use App\Entity\Historique;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Historique>
 *
 * @method Historique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Historique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Historique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoriqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Historique::class);
    }

    public function findAll(): array
    {
        return $this->findBy(array(), array('id' => 'DESC'));
    }

    public function rechercheAvancee(?string $type, ?int $id, ?string $username)
    {
        $qb = $this->createQueryBuilder('f');

        // Si aucun type n'est sélectionné, prendre tous les types
        if ($type == "all") {
            $types = ['ficheID', 'indexID', 'livreID', 'mot_cleID', 'statutID'];
        } else {
            $types[] = $type;
        }

        // Si un ID est fourni, recherche où au moins une colonne contient cet ID
        if ($id) {
            $conditions = [];
            foreach ($types as $type) {
                $conditions[] = "f.$type = :id";
            }
            $qb->where(implode(' OR ', $conditions))
                ->setParameter('id', $id);
        }
        // Si aucun ID n'est fourni, on cherche les lignes où la colonne du type choisi est remplie
        else {
            $conditions = [];
            foreach ($types as $type) {
                $conditions[] = "f.$type IS NOT NULL";
            }
            $qb->where(implode(' OR ', $conditions));
        }

        // Si un username est fourni, on ajoute un filtre sur l'utilisateur
        if (!empty($username)) {
            $qb->innerJoin('f.user', 'u')
                ->andWhere('u.username LIKE :username')
                ->setParameter('username', '%' . $username . '%');
        }

        // Trie les résultats par ID de manière décroissante
        $qb->orderBy('f.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function clearAll(): void
    {
        // On obtient l'EntityManager
        $em = $this->getEntityManager();

        // On crée une requête pour supprimer toutes les entrées de la table historique
        $query = $em->createQuery('DELETE FROM App\Entity\Historique');

        // On exécute la requête
        $query->execute();
    }

    //    /**
//     * @return Historique[] Returns an array of Historique objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    //    public function findOneBySomeField($value): ?Historique
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
