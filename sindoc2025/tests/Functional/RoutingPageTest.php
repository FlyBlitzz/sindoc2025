<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class RoutingPageTest extends WebTestCase{

    public function routeProvider(): array
    {
        return [
            ['/', 200], // Route pour la page d'accueil
            ['/login', 200], // Route pour la page de connexion
            ['/undefined', 404], // Route inexistante
            ['/user', 200], // Route pour la page de profil (utilisateur connecté)
            // ['/admin', 403], // Route pour une page réservée aux admins (sans droits)
        ];
    }

    /**
     * @dataProvider routeProvider
     */
    public function testRoutes(string $url, int $expectedStatusCode)
    {
        $client = static::createClient();

        $client->request('GET', $url);
        $this->assertResponseStatusCodeSame($expectedStatusCode);
    }
}