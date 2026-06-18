<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Entity\Index;
use App\Entity\IndexAuth;
use App\Form\IndexType;
use App\Repository\IndexRepository;
use App\Repository\IndexAuthRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use Doctrine\DBAL\Connection;
use App\Service\PdfService;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use App\Repository\LivreRepository;


class IndexController extends AbstractController
{


    #[Route("/mots-cles/{indexId}", name: "app_mots_cles", methods: ['GET'])]
    public function motsCles($indexId, IndexRepository $indexRepository)
    {
        $index = $indexRepository->find($indexId);
        if (!$index) {
            throw $this->createNotFoundException('Index non trouvé');
        }

        $motsClesSorted = $index->getMotCles()->toArray();
        usort($motsClesSorted, function ($a, $b) {
            return strcmp($a->getReference(), $b->getReference());
        });

        return $this->render('index/keywords.html.twig', [
            'indexId' => $indexId,
            'motsClesSorted' => $motsClesSorted,
        ]);
    }

    #[Route('/index/{id}/livres', name: 'app_index_livres', methods: ['GET'])]
    public function getAssociatedLivres($id, LivreRepository $livreRepository): JsonResponse
    {

        $livres = $livreRepository->findBy(['index' => $id]);

        $livreData = [];
        foreach ($livres as $livre) {
            $livreData[] = [
                'id' => $livre->getIdLivre(),
                'nom' => $livre->getNom(),
            ];
        }

        return new JsonResponse($livreData);
    }

    #[Route("/index/toggle/{id}", name: "app_index_toggle_visibility", methods: ["POST"])]
    public function toggleVisibility(Index $index, EntityManagerInterface $em): Response
    {
        $index->setVisible(!$index->isVisible());
        $em->flush();

        return $this->redirectToRoute('index_app_index_index');
    }

    #[Route('/index/{id}/invisible', name: 'app_index_invisible', methods: ['POST', 'GET'])]
    public function makeIndexInvisible($id, IndexRepository $indexRepository, LivreRepository $livreRepository, EntityManagerInterface $entityManager): JsonResponse
    {
        $index = $indexRepository->find($id);

        if (!$index) {
            return new JsonResponse(['message' => 'Index not found'], 404);
        }

        $index->setVisible(false);

        $livres = $livreRepository->findBy(['index' => $index]);
        foreach ($livres as $livre) {
            $livre->setVisible(false);
        }

        $entityManager->flush();

        return new JsonResponse(['message' => 'Index and its associated books have been made invisible'], 200);
    }


    #[Route('/export/pdf/{indexId}', name: 'export_pdf')]
    public function exportPdf(int $indexId, IndexRepository $indexRepository, PdfService $pdfService): Response
    {
        $index = $indexRepository->find($indexId);

        if (!$index) {
            throw $this->createNotFoundException('Index non trouvé.');
        }

        $motsCles = $index->getMotCles()->toArray();
        usort($motsCles, function ($a, $b) {
            return strcmp($a->getReference(), $b->getReference());
        });

        $html = $this->renderView('export/pdf_template.html.twig', [
            'index' => $index,
            'motsCles' => $motsCles,
        ]);

        $pdfContent = $pdfService->generateBinaryPDF($html);

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="index_' . $indexId . '.pdf"',
        ]);
    }


    #[Route('/export/word/{indexId}', name: 'export_word')]
    public function exportWord(int $indexId, IndexRepository $indexRepository): Response
    {
        // Fetch the index
        $index = $indexRepository->find($indexId);
        if (!$index) {
            throw $this->createNotFoundException('Index non trouvé.');
        }

        // Convert PersistentCollection to array and sort
        $motsCles = $index->getMotCles()->toArray();
        usort($motsCles, function ($a, $b) {
            return strcmp($a->getReference(), $b->getReference());
        });

        // Create a new PHPWord instance
        $phpWord = new PhpWord();

        // Define styles
        $headerStyle = ['name' => 'Calibri', 'size' => 14, 'color' => '2A6EBB', 'bold' => true];
        $subheaderStyle = ['name' => 'Calibri', 'size' => 12, 'bold' => true];
        $normalStyle = ['name' => 'Calibri', 'size' => 10];

        // Add a section to the document
        $section = $phpWord->addSection();

        // Add document title
        $section->addText('Export de l\'Index ' . $this->cleanText($index->getNom()), $headerStyle);
        $section->addText('Index Id: ' . $indexId, $subheaderStyle);
        $section->addText('Mots-clés', $subheaderStyle);

        // Add a table for mots-clés
        $table = $section->addTable([
            'borderSize' => 6,
            'borderColor' => '000000',
            'cellMargin' => 50,
        ]);

        // Add table headers
        $table->addRow();
        $table->addCell(5000)->addText('Référence', ['bold' => true]);
        $table->addCell(5000)->addText('Dénomination', ['bold' => true]);

        // Add table rows
        foreach ($motsCles as $motCle) {
            $table->addRow();
            $table->addCell()->addText($this->cleanText($motCle->getReference()), $normalStyle);
            $table->addCell()->addText($this->cleanText($motCle->getDenomination()), $normalStyle);
        }

        // Generate the Word document content
        ob_start();
        try {
            $writer = IOFactory::createWriter($phpWord, 'Word2007');
            $writer->save('php://output');
        } catch (\Exception $e) {
            ob_end_clean();
            throw new \RuntimeException('Failed to generate Word document: ' . $e->getMessage());
        }

        $wordContent = ob_get_clean();

        // Return the Word document as a response
        return new Response(
            $wordContent,
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'Content-Disposition' => 'attachment; filename="index_' . $index->getNom() . '.docx"',
            ]
        );
    }

    // Add this to your class
    private function cleanText(?string $text): string
    {
        $text = $text ?? 'Non spécifié';
        // Convert special characters to XML entities
        $text = htmlspecialchars($text, ENT_COMPAT | ENT_XML1, 'UTF-8');
        // Remove control characters (except tab/newline)
        $text = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $text);
        return $text;
    }


    #[Route("/index/{id}/auth", name: "app_index_auth", methods: ["GET"])]
    public function authPage(Index $index, UserRepository $userRepository, IndexAuthRepository $indexAuthRepository): Response
    {
        $users = $userRepository->findAll();
        $auths = [];
        foreach ($users as $user) {
            $auths[$user->getId()] = $indexAuthRepository->findByUserAndIndex($user->getId(), $index->getIdIndex());
        }

        return $this->render('index/auth.html.twig', [
            'index' => $index,
            'users' => $users,
            'auths' => $auths
        ]);
    }

    #[Route('/index/{id}/auth/save', name: 'app_index_auth_save', methods: ['POST'])]
    public function saveAuth(
        Request $request,
        Index $index,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $userIds = json_decode($request->request->get('users', '[]'), true);
        if (!is_array($userIds)) {
            throw new \InvalidArgumentException('Invalid users data');
        }

        foreach ($userIds as $userId) {
            $user = $userRepository->find($userId);

            if ($user) {
                $indexAuth = new IndexAuth();
                $indexAuth->setIndex($index);
                $indexAuth->setUser($user);

                try {
                    $entityManager->persist($indexAuth);
                    $entityManager->flush();
                } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                    $this->addFlash('error', 'Un utilisateur dispose déjà d\'une autorisation pour cet index.');
                    return $this->redirectToRoute('app_index_auth', ['id' => $index->getIdIndex()]);
                }
            }
        }

        return $this->redirectToRoute('app_index_auth', ['id' => $index->getIdIndex()]);
    }

    #[Route('/indexes/authorized', name: 'app_index_authorized_user')]
    public function viewAuthorizedIndexesForUser(Security $security): Response
    {

        $user = $security->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in.');
        }

        $userId = $user->getId();

        return $this->redirectToRoute('app_index_authorized', ['id' => $userId]);
    }

    #[Route('/indexes/authorized/{id}', name: 'app_index_authorized')]
    public function viewAuthorizedIndexes(Connection $connection, int $id): Response
    {

        $userId = $id;

        if (!$userId) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir cette page.');
        }

        $indexIds = $connection->executeQuery(
            'SELECT index_id FROM index_auth WHERE user_id = :user_id',
            ['user_id' => $userId]
        )->fetchFirstColumn();

        $authorizedIndexes = empty($indexIds) ? [] : $connection->executeQuery(
            'SELECT id, nom FROM index WHERE id IN (:index_ids) AND visible = true',
            ['index_ids' => $indexIds],
            ['index_ids' => Connection::PARAM_INT_ARRAY]
        )->fetchAllAssociative();

        return $this->render('profileuser/authorized.html.twig', [
            'authorizedIndexes' => $authorizedIndexes,
        ]);
    }


    #[Route('/index/{id}/auth/remove/{userId}', name: 'app_index_auth_remove', methods: ['GET'])]
    public function removeAuth(Index $index, int $userId, IndexAuthRepository $indexAuthRepository, EntityManagerInterface $entityManager): Response
    {

        $indexAuth = $indexAuthRepository->findByUserAndIndex($userId, $index->getIdIndex());
        if ($indexAuth) {
            $entityManager->remove($indexAuth);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_index_auth', ['id' => $index->getIdIndex()]);
    }


    #[Route('/index', name: 'index_app_index_index', methods: ['GET'])]
    public function index(IndexRepository $indexRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'indices' => $indexRepository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de créer un index
     */
    #[Route('/index/new', name: 'index_app_index_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $index = new Index();
        $form = $this->createForm(IndexType::class, $index);
        $form->handleRequest($request);

        // Get the current user
        $user = $this->getUser();


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($index);
            $entityManager->flush();

            // Créer et persister l'objet Historique
            $historique = new Historique();
            $historique->setIndexID($index->getIdIndex());
            $historique->setUser($user);
            $historique->setData($index);
            $historique->setTypeModif('Ajout');
            //Enregistrer la date et l'heure actuelle
            $dateActuelle = new DateTime();
            $heureActuelle = $dateActuelle->format('H:i:s');
            $historique->setCreateDate($dateActuelle);
            $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
            $historique->setHeure($heureObj);

            $entityManager->persist($historique);
            $entityManager->flush();

            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                return $this->redirectToRoute('index_app_index_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $index_auth = new IndexAuth();
                $index_auth->setIndex($index);
                $index_auth->setUser($user);

                $entityManager->persist($index_auth);
                $entityManager->flush();

                return $this->redirectToRoute('app_index_authorized', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('index/new.html.twig', [
            'index' => $index,
            'form' => $form,
        ]);
    }

    /**
     * @param Index $index
     * @return Response
     * Permet d'afficher un index
     */
    #[Route('/index/{id}', name: 'index_app_index_show', methods: ['GET'])]
    public function show(#[MapEntity(id: 'id')] Index $index): Response
    {
        return $this->render('index/show.html.twig', [
            'index' => $index,
        ]);
    }

    /**
     * @param Request $request
     * @param Index $index
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier un index
     */
    #[Route('/index/{id}/edit', name: 'index_app_index_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] Index $index, EntityManagerInterface $entityManager): Response
    {
        $historique = new Historique();
        $ancienIndex = clone $index;
        $historique->setOldData($ancienIndex);
        $form = $this->createForm(IndexType::class, $index);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Save the updated entity to the database
            $entityManager->flush();

            // Get the current user
            $user = $this->getUser();

            // Create Historique entry
            $historique->setIndexID($index->getIdIndex());
            $historique->setUser($user);
            $historique->setTypeModif('Modification');
            $historique->setData($index);
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();


            // Check if the user has an admin role
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                // Redirect to the index list or admin dashboard if the user is an admin
                return $this->redirectToRoute('index_app_index_index', [], Response::HTTP_SEE_OTHER);
            } else {
                // Redirect to the authorized indexes page for non-admin users
                return $this->redirectToRoute('app_index_authorized', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
            }
        }

        // Render the edit form if the form wasn't submitted or is invalid
        return $this->render('index/edit.html.twig', [
            'index' => $index,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param Index $index
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer un index
     */
    #[Route('/index/{id}', name: 'index_app_index_delete', methods: ['POST'])]
    public function delete(Request $request, #[MapEntity(id: 'id')] Index $index, EntityManagerInterface $entityManager): Response
    {
        // Get the current user
        $user = $this->getUser();
        if (!$index->getLivres()->isEmpty()) {

            $this->addFlash('error', 'Impossible de supprimer cet index car des livres lui sont liés.');
            $livres = $index->getLivres();

            return $this->render('livre/index.html.twig', [
                'livres' => $livres,
            ]);
        }

        if ($this->isCsrfTokenValid('delete' . $index->getIdIndex(), $request->request->get('_token'))) {
            /**
             * Ajouter une action permettant de supprimer les lignes dans index_auth contenant l'index
             * Puis vérifier la suppression côté admin et côté utilisateur
             */

            $user = $this->getUser();

            $historique = new Historique();
            $historique->setIndexID($index->getIdIndex());
            $historique->setUser($user);
            $historique->setTypeModif('Suppression');
            $historique->setData($index);
            //Enregistrer la date et l'heure actuelle
            $dateActuelle = new DateTime();
            $heureActuelle = $dateActuelle->format('H:i:s');
            $historique->setCreateDate($dateActuelle);
            $heureObj = DateTime::createFromFormat('H:i:s', $heureActuelle);
            $historique->setHeure($heureObj);
            $entityManager->persist($historique);

            $entityManager->remove($index);
            $entityManager->flush();
            $this->addFlash('success', 'L\'index à été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression de l\'index. Veuillez réessayer.');
        }

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->redirectToRoute('index_app_index_index', [], Response::HTTP_SEE_OTHER);
        } else {
            return $this->redirectToRoute('app_index_authorized', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
        }
    }
}