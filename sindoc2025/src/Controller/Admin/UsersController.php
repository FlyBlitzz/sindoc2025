<?php

namespace App\Controller\Admin;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/admin/users', name: 'admin_users', methods: ['GET'])]
class UsersController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(UserRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $users = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            2
        );

        return $this->render('admin/users/index.html.twig', [
            'users' => $users
        ]);
    }
}