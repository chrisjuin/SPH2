<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommentaireControllerController extends Controller
{
    /**
     * Commentaire Controller
     * 
     * @Route("commentaire")
     */

    public function indexAction()
    {
        return $this->render('AppBundle:Commentaire:index.html.twig', array(

        ));
    }
}
