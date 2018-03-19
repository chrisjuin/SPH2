<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cli_client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Input\Input;

/**
 * Cli_client controller.
 *
 * @Route("fiche_client")
 */
class Cli_clientController extends Controller
{
    /**
     * Lists all cli_client entities.
     *
     * @Route("/", name="fiche_client_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cli_clients = $em->getRepository('AppBundle:Cli_client')->findAll();

        return $this->render('cli_client/index.html.twig', array(
            'cli_clients' => $cli_clients,
        ));
    }

    /**
     * Creates a new cli_client entity.
     *
     * @Route("/new", name="fiche_client_new")
     * @Method({"GET" , "POST"})
     */

    public function newAction(Request $request)
    {
        $cli_client = new Cli_client();
        $form = $this->createForm('AppBundle\Form\Cli_clientType', $cli_client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cli_client);
            $em->flush();

            return $this->redirectToRoute('fiche_client_show', array('id' => $cli_client->getId()));
        }

        return $this->render('cli_client/new.html.twig', array(
            'cli_client' => $cli_client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cli_client entity.
     *
     * @Route("/{id}", name="fiche_client_show")
     * @Method("GET")
     */
    public function showAction(Cli_client $cli_client)
    {
        $deleteForm = $this->createDeleteForm($cli_client);

        return $this->render('cli_client/show.html.twig', array(
            'cli_client' => $cli_client,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cli_client entity.
     *
     * @Route("/{id}/edit", name="fiche_client_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cli_client $cli_client)
    {
        $deleteForm = $this->createDeleteForm($cli_client);
        $editForm = $this->createForm('AppBundle\Form\Cli_clientType', $cli_client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_client_edit', array('id' => $cli_client->getId()));
        }

        return $this->render('cli_client/edit.html.twig', array(
            'cli_client' => $cli_client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cli_client entity.
     *
     * @Route("/{id}", name="fiche_client_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cli_client $cli_client)
    {
        $form = $this->createDeleteForm($cli_client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cli_client);
            $em->flush();
        }

        return $this->redirectToRoute('fiche_client_index');
    }

    /**
     * Creates a form to delete a cli_client entity.
     *
     * @param Cli_client $cli_client The cli_client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cli_client $cli_client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche_client_delete', array('id' => $cli_client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
