<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Travail;
use AppBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Input\Input;


/**
 * Travail controller
 *
 * @Route("fiche_chantier")
 */
class TravailController extends Controller
{
    /**
     * Lists all travail entities.
     *
     * @Route("/", name="fiche_chantier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $travail = $em->getRepository('AppBundle:Travail')->findAll();

        return $this->render('Travail/index.html.twig', array(
            'travails' => $travail,
        ));
    }

    /**
     * Creates a new travail entity.
     *
     * @Route("/new", name="fiche_chantier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $travail = new Travail();

        //Récup du client
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('AppBundle:Client')->find($request->query->get('utilisateur_id'));

        $travail->setClient($client);
        
        $form = $this->createForm('AppBundle\Form\TravailType', $travail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($travail); 
            $em->flush();

            return $this->redirectToRoute('fiche_chantier_show', array('id' => $travail->getId()));
        }

        return $this->render('Travail/new.html.twig', array(
            'travail' => $travail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a travail entity.
     *
     * @Route("/{id}", name="fiche_chantier_show")
     * @Method("GET")
     */
    public function showAction(Travail $travail, Request $request)
    {
        $deleteForm = $this->createDeleteForm($travail);
            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository('AppBundle:Client')->findAll();
            $commentaire = $em->getRepository('AppBundle:Commentaire')->findAll();

        return $this->render('Travail/show.html.twig', array(
            'travail' => $travail,
            'commentaire'=> $commentaire, 
            'client' => $client, 
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing travail entity.
     *
     * @Route("/{id}/edit", name="fiche_chantier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Travail $travail)
    {
        $deleteForm = $this->createDeleteForm($travail);
        $editForm = $this->createForm('AppBundle\Form\TravailType', $travail);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_chantier_edit', array('id' => $travail->getId()));
        }

        return $this->render('Travail/edit.html.twig', array(
            'travail' => $travail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a travail entity.
     *
     * @Route("/{id}", name="fiche_chantier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Travail $travail)
    {
        $form = $this->createDeleteForm($travail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($travail);
            $em->flush();
        }

        return $this->redirectToRoute('fiche_chantier_index');
    }

    /**
     * Creates a form to delete a travail entity.
     *
     * @param Travail $travail The travail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Travail $travail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche_chantier_delete', array('id' => $travail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
