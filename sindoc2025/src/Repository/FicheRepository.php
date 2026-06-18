<?php

namespace App\Repository;

use App\Entity\Fiche;
use App\Entity\Livre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Types\Types;
use App\Entity\MotCle;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Service\SearchService;
use Doctrine\ORM\NativeQuery;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * @extends ServiceEntityRepository<Fiche>
 *
 * @method Fiche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fiche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fiche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheRepository extends ServiceEntityRepository
{
    private $logicalParser;
    public function __construct(
        ManagerRegistry $registry,
        SearchService $logicalParser,
        private PaginatorInterface $paginator
    ) {
        parent::__construct($registry, Fiche::class);
        $this->logicalParser = $logicalParser;
    }

    public function search(array $criteria, Livre $livreId, ?User $user, bool $isAdmin): array
    {
        $queryBuilder = $this->createQueryBuilder('f')
            ->innerJoin('f.livre', 'l') // Join Fiche with Livre
            ->andWhere('f.livre = :livre')
            ->setParameter(":livre", $livreId);
        if (!$isAdmin)
            $queryBuilder->andWhere('f.visible=true');
        // $queryBuilder->andWhere("f.livre = :livre")

        if (!$isAdmin) {
            $queryBuilder->leftJoin('l.livreAuths', 'la', 'WITH', 'la.user = :user')
                ->addSelect('l', 'la')
                ->setParameter('user', $user);
        }
        if (!empty($criteria['ficheId'])) {
            $queryBuilder->andWhere('f.id = :id')->setParameter('id', $criteria['ficheId']);
        }
        if (!empty($criteria['refer'])) {
            $queryBuilder->andWhere('f.refer LIKE :refer')
                ->setParameter('refer', '%' . $criteria['refer'] . '%'); // Wildcards for partial matching
        }
        if (!empty($criteria['edition'])) {
            $queryBuilder->andWhere('f.edition LIKE :edition')->setParameter('edition', '%' . $criteria['edition'] . '%');
        }

        if (!empty($criteria['denomination'])) {
            $queryBuilder->andWhere('f.denomination LIKE :denomination')->setParameter('denomination', '%' . $criteria['denomination'] . '%');
        }
        if (!empty($criteria['statut'])) {
            $queryBuilder->andWhere('f.statut = :statut')->setParameter('statut', $criteria['statut']);
        }
        if (!empty($criteria['texte'])) {
            $queryBuilder->andWhere('f.texte LIKE :texte')->setParameter('texte', '%' . $criteria['texte'] . '%');
        }

        if (!empty($criteria['traduction'])) {
            $queryBuilder->andWhere('f.traduction LIKE :traduction')->setParameter('traduction', '%' . $criteria['traduction'] . '%');
        }
        if (!empty($criteria['notes'])) {
            $queryBuilder->andWhere('f.notes LIKE :notes')->setParameter('notes', '%' . $criteria['notes'] . '%');
        }

        if (!empty($criteria['commentaire'])) {
            $queryBuilder->andWhere('f.commentaire LIKE :commentaire')->setParameter('commentaire', '%' . $criteria['commentaire'] . '%');
        }
        if (!empty($criteria['motClesRechercher'])) {
            // Tokenize and parse the expression
            $tokens = $this->logicalParser->tokenize($criteria['motClesRechercher']);

            $ast = $this->logicalParser->parse($tokens);
            $this->logicalParser->buildQuery($queryBuilder, $ast);
        }

        return $queryBuilder->getQuery()->getResult();
    }

    public function searchMultiCrit(NativeQuery $query)
    {
        return $query->getResult();
    }

    //Fonction permettant de récupérer l'entièreté des fiches, tout en gardant le même ordre à chaque appel
    public function findAll(): array
    {
        return $this->findBy(array(), array('id' => 'ASC'));
    }

    public function resetAutoIncrement()
    {
        $entityManager = $this->getEntityManager();
        $connection = $entityManager->getConnection();

        $sql = match ($connection->getDatabasePlatform()->getName()) {
            'mysql' => "ALTER TABLE fiche AUTO_INCREMENT = (SELECT MAX(id) + 1 FROM fiche)",
            'postgresql' => "SELECT setval('fiche_id_seq', (SELECT MAX(id) FROM fiche) + 1)"
        };

        $stmt = $connection->prepare($sql);
        $stmt->executeQuery();
    }




}