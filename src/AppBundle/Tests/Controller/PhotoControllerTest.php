<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhotoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createPhoto();

        $crawler = $client->request('GET', 'photo');
    }

}
