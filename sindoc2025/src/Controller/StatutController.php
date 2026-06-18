<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Entity\Statut;
use App\Form\StatutType;
use App\Repository\StatutRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/statut', name: 'statut_')]
class StatutController extends AbstractController
{
    /**
     * @param StatutRepository $statutRepository
     * @return Response
     * Permet d'afficher la liste des statuts
     */
    #[Route('/', name: 'app_statut_index', methods: ['GET'])]
    public function index(StatutRepository $statutRepository): Response
    {
        return $this->render('statut/index.html.twig', [
            'statuts' => $statutRepository->findAll(),
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de créer un statut
     */
    #[Route('/new', name: 'app_statut_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $statut = new Statut();
        $form = $this->createForm(StatutType::class, $statut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($statut);
            $entityManager->flush();

            // Create Historique entry
            $historique = new Historique();
            $user = $this->getUser();
            $historique->setStatutID($statut->getIdStatut());
            $historique->setUser($user);
            $historique->setData($statut);
            $historique->setTypeModif('Ajout');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('statut_app_statut_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('statut/new.html.twig', [
            'statut' => $statut,
            'form' => $form,
        ]);
    }

    /**
     * @param Statut $statut
     * @return Response
     * Permet d'afficher les détails d'un statut
     */
    #[Route('/{id}', name: 'app_statut_show', methods: ['GET'])]
    public function show(#[MapEntity(id: 'id')] Statut $statut): Response
    {
        return $this->render('statut/show.html.twig', [
            'statut' => $statut,
        ]);
    }

    /**
     * @param Request $request
     * @param Statut $statut
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier un statut
     */
    #[Route('/{id}/edit', name: 'app_statut_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] Statut $statut, EntityManagerInterface $entityManager): Response
    {
        $historique = new Historique();
        $ancienStatut = clone $statut;
        $historique->setOldData($ancienStatut);

        $form = $this->createForm(StatutType::class, $statut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // Create Historique entry
            $user = $this->getUser();
            $historique->setStatutID($statut->getIdStatut());
            $historique->setUser($user);
            $historique->setData($statut);
            $historique->setTypeModif('Modification');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('statut_app_statut_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('statut/edit.html.twig', [
            'statut' => $statut,
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param Statut $statut
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer un statut
     */
    #[Route('/{id}', name: 'app_statut_delete', methods: ['POST'])]
    public function delete(Request $request, #[MapEntity(id: 'id')] Statut $statut, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $statut->getIdStatut(), $request->request->get('_token'))) {
            // Create Historique entry
            $historique = new Historique();
            $user = $this->getUser();
            $historique->setStatutID($statut->getIdStatut());
            $historique->setUser($user);
            $historique->setData($statut);
            $historique->setTypeModif('Suppression');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            $entityManager->remove($statut);
            $entityManager->flush();
        }

        return $this->redirectToRoute('statut_app_statut_index', [], Response::HTTP_SEE_OTHER);
    }
}