<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class pho_photoController extends Controller
{
    /**
     * @Route("photo")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:pho_photo:index.html.twig', array(
            
            

        ));
    }

}
