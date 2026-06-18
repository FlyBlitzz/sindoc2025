<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LoginPageTest extends WebTestCase
{
   

    public function testLoginFormSubmission(): void
    {
        $client = static::createClient();
        
        /** @var UrlGeneratorInterface $urlGenerator */
        $urlGenerator = $client->getContainer()->get("router");

        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        $form = $crawler->filter("form[name=login]")->form([
            "username" => "fabrice",
            "password" => "Fabrice1234@"
        ]);
        


        // Soumettre le formulaire
        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);

        $client->request('GET', '/');

        // Vérifier que la redirection s'est faite après la soumission du formulaire
        $this->assertRouteSame('app_home'); 
    }
}

