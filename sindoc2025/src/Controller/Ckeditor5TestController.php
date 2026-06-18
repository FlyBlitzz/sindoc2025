<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Ckeditor5TestController extends AbstractController
{
    #[Route('/ckeditor5/test', name: 'app_ckeditor5_test')]
    public function index(): Response
    {
        return $this->render('ckeditor5_test/index.html.twig', [
            'controller_name' => 'Ckeditor5TestController',
        ]);
    }
}
