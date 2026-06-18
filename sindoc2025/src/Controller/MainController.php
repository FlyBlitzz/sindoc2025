<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use App\Repository\UserRepository;



class MainController extends AbstractController
{
   #[Route('/admin', name: 'admin_index')]
  public function index(UserRepository $repository): Response
  {

    
    return $this->render('users/listUser.html.twig', [
        'users' => $repository->createQueryBuilder('u')
        ->leftJoin('u.fiches', 'f') // Assuming 'fiches' is the property in User entity
        ->addSelect('f') // Fetch fiches with users
        ->getQuery()
        ->getResult()
    ]);
  }
 #[Route('/admin/admin_get_base_html', name: 'admin_get_base_html')]
    public function getBaseHTMLAdmin(): Response
    {
       return $this->render('base.html.twig');

    }

    #[Route('/mentions', name: 'mentions_legales')]
    public function indexMentions()
    {
        return $this->render('mentions.html.twig');
    }

    #[Route('/annuaire', name: 'app_annuaire')]
    public function indexAnnuaire()
    {
        return $this->render('annuaire.html.twig');
    }



}
