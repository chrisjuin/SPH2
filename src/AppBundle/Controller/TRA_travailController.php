<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TRA_travail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tra_travail controller.
 *
 * @Route("fiche_chantier")
 */
class TRA_travailController extends Controller
{
    /**
     * Lists all tRA_travail entities.
     *
     * @Route("/", name="fiche_chantier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tRA_travails = $em->getRepository('AppBundle:TRA_travail')->findAll();

        return $this->render('tra_travail/index.html.twig', array(
            'tRA_travails' => $tRA_travails,
        ));
    }

    /**
     * Creates a new tRA_travail entity.
     *
     * @Route("/new", name="fiche_chantier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tRA_travail = new Tra_travail();
        $form = $this->createForm('AppBundle\Form\TRA_travailType', $tRA_travail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tRA_travail);
            $em->flush();

            return $this->redirectToRoute('fiche_chantier_show', array('id' => $tRA_travail->getId()));
        }

        return $this->render('tra_travail/new.html.twig', array(
            'tRA_travail' => $tRA_travail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tRA_travail entity.
     *
     * @Route("/{id}", name="fiche_chantier_show")
     * @Method("GET")
     */
    public function showAction(TRA_travail $tRA_travail)
    {
        $deleteForm = $this->createDeleteForm($tRA_travail);

        return $this->render('tra_travail/show.html.twig', array(
            'tRA_travail' => $tRA_travail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tRA_travail entity.
     *
     * @Route("/{id}/edit", name="fiche_chantier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TRA_travail $tRA_travail)
    {
        $deleteForm = $this->createDeleteForm($tRA_travail);
        $editForm = $this->createForm('AppBundle\Form\TRA_travailType', $tRA_travail);
        $editForm->handleRequest($request);
        // $form = $formFactory->create('new_form', 
        // $model,
        //     array('fiche_chantier_edit'=>'true')
        // ); 

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_chantier_edit', array('id' => $tRA_travail->getId()));
        }

        return $this->render('tra_travail/edit.html.twig', array(
            'tRA_travail' => $tRA_travail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tRA_travail entity.
     *
     * @Route("/{id}", name="fiche_chantier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TRA_travail $tRA_travail)
    {
        $form = $this->createDeleteForm($tRA_travail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tRA_travail);
            $em->flush();
        }

        return $this->redirectToRoute('fiche_chantier_index');
    }

    /**
     * Creates a form to delete a tRA_travail entity.
     *
     * @param TRA_travail $tRA_travail The tRA_travail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TRA_travail $tRA_travail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche_chantier_delete', array('id' => $tRA_travail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
