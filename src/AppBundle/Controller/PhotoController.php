<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PhotoController extends Controller
{
    /**
     * Photo Controller 
     * 
     * @Route("photo")
     */
    public function indexAction()
    {
    /**
     * @Route("/", name="photo")
     */
        return $this->render('AppBundle:Photo:index.html.twig', array(
            
        ));
    }

}
