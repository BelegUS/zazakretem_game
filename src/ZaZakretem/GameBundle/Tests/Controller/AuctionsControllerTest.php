<?php

namespace ZaZakretem\GameBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuctionsControllerTest extends WebTestCase
{
    public function testBuy()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/buyCar');
    }

    public function testSellcar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sellCar');
    }

    public function testViewcars()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/viewCars');
    }

}
