<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageTest extends WebTestCase
{
    public function testLinks(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();

        $button1 = $crawler->filter('.btn.btn-outline-info.btn-lg.rounded-0.merriweather');
        $this->assertEquals(1, count($button1));

        $button2 = $crawler->filter('.btn.btn-order.btn-lg.me-5.rounded-0.merriweather')->attr('href');
        $this->assertEquals('https://ista.univ-fcomte.fr/index.php/bdd/esclaves-dependants', $button2);

        $this->assertSelectorTextContains('h1', 'Un outil pour analyser les textes Antiques');


        $accueil = $crawler->filter('a.nav-link.active')->attr('href');
        $this->assertEquals('/', $accueil);
    }

    public function testImages()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertGreaterThanOrEqual(1, $crawler->filter('img[src*="images/img1.png"]')->count());
        $this->assertGreaterThanOrEqual(1, $crawler->filter('img[src*="images/Carousel/img2.png"]')->count());
        $this->assertGreaterThanOrEqual(1, $crawler->filter('img[src*="images/img4.png"]')->count());
    }


    
}
