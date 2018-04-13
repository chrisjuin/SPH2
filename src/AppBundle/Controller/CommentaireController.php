<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commentaire; 
use AppBundle\Form\CommentaireType; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Commentaire Controller
 * 
 * @Route("commentaire")
 */
class CommentaireController extends Controller
{
    /**
     * @Route("/", name="commentaire")
     */
    public function AfficheAction(Request  $request)
    {
        $commentaire = new Commentaire(); 
        $form = $this->createForm (CommentaireType::class, $commentaire); 
    
        $form->handleRequest($request); 
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager(); 
            $em->persist($commentaire);
            $em->flush();
        
            // return $this->redirectToRoute(''); 
        }
    
            return $this->render('AppBundle:Commentaire:affiche.html.twig', array(
                'commentaire' =>$commentaire,
                'form' => $form->createView()
            ));
    }

}
