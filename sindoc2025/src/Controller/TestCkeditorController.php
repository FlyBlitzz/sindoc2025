<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestCkeditorController extends AbstractController
{
    #[Route('/test-ckeditor', name: 'test_ckeditor')]
    public function testFinal(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire (avec CKEditor)',
                'required' => false,
                'attr' => [
                    'class' => 'ckeditor-field form-control', // TES classes
                    'rows' => 5,
                    'id' => 'commentaire-field' // ID unique
                ]
            ])
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }
        
        return $this->render('test_ckeditor/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}