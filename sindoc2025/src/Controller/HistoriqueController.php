<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Form\HistoriqueType;
use App\Repository\HistoriqueRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueController extends AbstractController
{
    /**
     * @param HistoriqueRepository $historiqueRepository
     * @return Response
     * Afficher les données de l'historique
     */
    #[Route('/historique', name: 'historique_app_historique_index', methods: ['GET'])]
    public function index(HistoriqueRepository $historiqueRepository): Response
    {
        return $this->render('historique/index.html.twig', [
            'historiques' => $historiqueRepository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @param HistoriqueRepository $historiqueRepository
     * @param UserRepository $userRepository
     * @return Response
     * Faire une recherche dans les données existantes de l'historique
     */
    #[Route('/historique/search', name: 'historique_search', methods: ['GET'])]
    public function searchHistorique(Request $request, HistoriqueRepository $historiqueRepository, UserRepository $userRepository): Response
    {
        $type = $request->query->get('objet');
        $id = $request->query->get('id');
        $name = $request->query->get('nom'); // Récupère le nom de l'utilisateur via la requête HTTP

        $id = !empty($id) ? (int) $id : null;

        $historiques = $historiqueRepository->rechercheAvancee($type, $id, $name);

        // Passer les résultats à la vue
        return $this->render('historique/index.html.twig', [
            'historiques' => $historiques,
        ]);
    }

    /**
     * @param Request $request
     * @param Historique $historique
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier une ligne de l'historique
     */
    #[Route('/historique/{id}/edit', name: 'historique_app_historique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] Historique $historique, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HistoriqueType::class, $historique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('historique_app_historique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('historique/edit.html.twig', [
            'historique' => $historique,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param Historique $historique
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer une ligne de l'historique
     */
    #[Route('/historique/delete/{id}', name: 'historique_app_historique_delete')]
    public function delete(Request $request, #[MapEntity(id: 'id')] Historique $historique, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$historique->getIdHistorique(), $request->request->get('_token'))) {
            $entityManager->remove($historique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('historique_app_historique_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @param HistoriqueRepository $historiqueRepository
     * @return Response
     * Permet de supprimer toutes les lignes de l'historique en une seule fois
     */
    #[Route('/historique/clear', name: 'vider_historique', methods: ['POST'])]
    public function viderHistorique(HistoriqueRepository $historiqueRepository): Response
    {
        // Suppression de toutes les lignes de la table historique
        $historiqueRepository->clearAll();

        // Rediriger l'utilisateur après la suppression
        return $this->redirectToRoute('historique_app_historique_index');
    }

}
