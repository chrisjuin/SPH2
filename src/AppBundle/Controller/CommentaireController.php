<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Travail;
use AppBundle\Entity\Commentaire; 
use AppBundle\Form\CommentaireType; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Commentaire Controller
 * 
 */
class CommentaireController extends Controller
{
    /**
     * @Route("/travail/{travail_id}/commentaire", name="commentaire")
     */
    public function AfficheAction(Request $request, $travail_id)
    {
        $commentaire = new Commentaire(); 
        $form = $this->createForm (CommentaireType::class, $commentaire); 
        $form->handleRequest($request); 

        $em = $this->getDoctrine()->getManager();
        $travail = $em->getRepository('AppBundle:Travail')->find($travail_id);
        $commentaire->setTravail($travail);

        $fosUser = $this->get('security.token_storage')->getToken()->getUser();
        $commentaire->setFOSUser($fosUser);
        

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager(); 
            $em->persist($commentaire);
            $em->flush();
        
            return $this->redirectToRoute('fiche_chantier_show', array('id' => $travail_id)); 
        }
    
        return $this->render('AppBundle:Commentaire:affiche.html.twig', array(
            'commentaire' =>$commentaire,
            'form' => $form->createView()
        ));
    }

}
