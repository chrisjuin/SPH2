<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Commentaire Controller
 * 
 * @Route("commentaire")
 */
class CommentaireControllerController extends Controller
{
    /**
     * Lists all commentaire entities.
     * 
     * @Route("/" , name="commentaire_index")
     * @Method("GET, POST)
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaire  = $em->getRepository('AppBundle:Commentaire')->findAll();

        return $this->render('AppBundle:Commentaire:index.html.twig', array(    
        ));
    }
}
