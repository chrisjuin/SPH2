<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Travail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Travail controller.
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

        $tRA_travails = $em->getRepository('AppBundle:Travail')->findAll();

        return $this->render('travail/index.html.twig', array(
            'tRA_travails' => $tRA_travails,
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
        $travail = new Tra_travail();
        $form = $this->createForm('AppBundle\Form\TravailType', $travail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // var_dump($request->get('utilisateur_id')); die();
            $em = $this->getDoctrine()->getManager();
            $cli_client = $em->getRepository('AppBundle:Cli_client')->find($request->get('utilisateur_id'));

            $travail->setCliClient($cli_client);
            $em = $this->getDoctrine()->getManager();
            $em->persist($travail);
            $em->flush();

            return $this->redirectToRoute('fiche_chantier_show', array('id' => $travail->getId()));
        }

        return $this->render('travail/new.html.twig', array(
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
    public function showAction(Travail $travail)
    {
        $deleteForm = $this->createDeleteForm($travail);

        return $this->render('travail/show.html.twig', array(
            'travail' => $travail,
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
        // $form = $formFactory->create('new_form', 
        // $model,
        //     array('fiche_chantier_edit'=>'true')
        // ); 

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_chantier_edit', array('id' => $travail->getId()));
        }

        return $this->render('travail/edit.html.twig', array(
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
