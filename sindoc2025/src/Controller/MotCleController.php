<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Entity\MotCle;
use App\Form\MotCleType;
use App\Repository\IndexRepository;
use App\Repository\MotCleRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/mot/cle', name: 'mot_cle_')]
class MotCleController extends AbstractController
{
    /**
     * @param Request $request
     * @param MotCleRepository $motCleRepository
     * @param IndexRepository $indexRepository
     * @return Response
     * Permet d'afficher la liste des mots clés
     */
    #[Route('/', name: 'app_mot_cle_index', methods: ['GET'])]
    public function index(Request $request, MotCleRepository $motCleRepository, IndexRepository $indexRepository): Response
    {
        $indexId = $request->query->get('index');
        $indexes = $indexRepository->findAll();
        $motsCles = $indexId != 0 ? $motCleRepository->findBy(['index' => $indexId]) : $motCleRepository->findAll();
        // dd($motsCles);
        return $this->render('mot_cle/index.html.twig', [
            'indexes' => $indexes,
            'mot_cles' => $motsCles,
            'selectedIndex' => $indexId,
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de créer un mot clé
     */
    #[Route('/new', name: 'app_mot_cle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $motCle = new MotCle();
        $form = $this->createForm(MotCleType::class, $motCle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($motCle);
            $entityManager->flush();

            // Create Historique entry
            $historique = new Historique();
            $user = $this->getUser();
            $historique->setMotCleID($motCle->getIdMotCle());
            $historique->setUser($user);
            $historique->setData($motCle);
            $historique->setTypeModif('Ajout');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('mot_cle_app_mot_cle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mot_cle/new.html.twig', [
            'mot_cle' => $motCle,
            'form' => $form,
        ]);
    }

    /**
     * @param MotCle $motCle
     * @return Response
     * Permet d'afficher les détails d'un mot clé
     */
    #[Route('/{id}', name: 'app_mot_cle_show', methods: ['GET'])]
    public function show(#[MapEntity(id: 'id')] MotCle $motCle): Response
    {
        return $this->render('mot_cle/show.html.twig', [
            'mot_cle' => $motCle,
        ]);
    }

    /**
     * @param Request $request
     * @param MotCle $motCle
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de modifier un mot clé
     */
    #[Route('/{id}/edit', name: 'app_mot_cle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, #[MapEntity(id: 'id')] MotCle $motCle, EntityManagerInterface $entityManager): Response
    {
        $historique = new Historique();
        $ancienMotCle = clone $motCle;
        $historique->setOldData($ancienMotCle);
        $form = $this->createForm(MotCleType::class, $motCle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // Create Historique entry
            $user = $this->getUser();
            $historique->setMotCleID($motCle->getIdMotCle());
            $historique->setUser($user);
            $historique->setData($motCle);
            $historique->setTypeModif('Modification');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();

            return $this->redirectToRoute('mot_cle_app_mot_cle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mot_cle/edit.html.twig', [
            'mot_cle' => $motCle,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/editMot', name: 'app_mot_cle_edit_un_mot', methods: ['GET', 'POST'])]
    public function editUnMot(Request $request,#[MapEntity(id: 'id')]  MotCle $motCle, EntityManagerInterface $entityManager): Response
        {
            $form = $this->createForm(MotCleType::class, $motCle);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();

           $this->addFlash(type: 'success', message: "Met à jour avec succès");
            }

            return $this->render('mot_cle/edit_un_seul_mot.html.twig', [
                'mot_cle' => $motCle,
                'form' => $form,
            ]);
        }

    /**
     * @param Request $request
     * @param MotCle $motCle
     * @param EntityManagerInterface $entityManager
     * @return Response
     * Permet de supprimer un mot clé
     */
    #[Route('/{id}', name: 'app_mot_cle_delete', methods: ['POST'])]
    public function delete(Request $request, #[MapEntity(id: 'id')] MotCle $motCle, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$motCle->getIdMotCle(), $request->request->get('_token'))) {
            // Create Historique entry
            $historique = new Historique();
            $user = $this->getUser();
            $historique->setMotCleID($motCle->getIdMotCle());
            $historique->setUser($user);
            $historique->setData($motCle);
            $historique->setTypeModif('Suppression');
            $dateActuelle = new DateTime();
            $historique->setCreateDate($dateActuelle);
            $historique->setHeure($dateActuelle);
            $entityManager->persist($historique);
            $entityManager->flush();
           // dd($motCle);
            $entityManager->remove($motCle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mot_cle_app_mot_cle_index', [], Response::HTTP_SEE_OTHER);
    }
}