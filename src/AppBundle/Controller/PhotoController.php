<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PhotoController extends Controller
{
    /**
     * @Route("photo")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:photo:index.html.twig', array(
            
            

        ));
    }

}
