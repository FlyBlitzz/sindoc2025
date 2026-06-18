<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager, Security $security, Request $request): Response
    {
        $session = $request->getSession();
        $user = $this->getUser();
        $query = $entityManager->createQuery(
            'SELECT l 
             FROM App\Entity\Livre l
             JOIN l.livreAuths la
             WHERE la.user = :user'
        )->setParameter('user', $user);

        $livres = $query->getResult();
        
        $canEdit = !empty($livres);
        $session->set('canEdit', $canEdit);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'canEdit' => $canEdit
        ]);
    }
}





