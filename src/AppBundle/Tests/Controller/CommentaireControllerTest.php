<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentaireControllerTest extends WebTestCase
{
    public function testNew()
    {
        $commentaire = static::createCommentaire();

        $crawler = $commentaire->request('GET', '/commentaire');
    }

}
