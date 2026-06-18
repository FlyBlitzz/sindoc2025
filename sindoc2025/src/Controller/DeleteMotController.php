<?php

namespace App\Controller;

use App\Entity\MotCle;
use App\Form\MotCleType;
use App\Repository\MotCleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mot_cle', name: 'motCle_')]
class DeleteMotController extends AbstractController
{


    #[Route('/new', name: 'app_mot_cle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $motCle = new MotCle();
        $form = $this->createForm(MotCleType::class, $motCle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($motCle);
            $entityManager->flush();

            return $this->redirectToRoute('motCle_app_mot_cle_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mot_cle/newMot.html.twig', [
            'mot_cle' => $motCle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_mot_cle_show', methods: ['GET'])]
    public function show(#[MapEntity(id: 'id')] MotCle $motCle): Response
    {
        return $this->render('mot_cle/deleteMot.html.twig', [
            'mot_cle' => $motCle,
        ]);
    }


    #[Route('/{id}/editMot', name: 'app_mot_cle_edit_un_mot', methods: ['GET', 'POST'])]
        public function editUnMot(Request $request,#[MapEntity(id: 'id')] MotCle $motCle, EntityManagerInterface $entityManager): Response
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


#[Route('/{id}', name: 'app_mot_cle_delete', methods: ['POST'])]
public function delete(Request $request, #[MapEntity(id: 'id')] MotCle $motCle, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$motCle->getIdMotCle(), $request->request->get('_token'))) {
        $entityManager->remove($motCle);
        $entityManager->flush();

        // Retourner une réponse sans redirection
        return new Response("Le mot clé a été supprimé avec succès", Response::HTTP_OK);
    }

    // Retourner une réponse en cas de token CSRF invalide
    return new Response("Token CSRF invalide", Response::HTTP_BAD_REQUEST);
}

}
