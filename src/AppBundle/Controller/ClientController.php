<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Travail;
use AppBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Input\Input;

/**
 * Client controller
 *
 * @Route("fiche_client")
 */
class ClientController extends Controller
{
    /**
     * Lists all client entities.
     *
     * @Route("/", name="fiche_client_index")
     * @Method("GET")
     */
    public function indexAction( Request $request)
    {
        $search = $request->get('search');  

        $em = $this->getDoctrine()->getManager();
        if ( empty($search) ) {
            $client = $em->getRepository('AppBundle:Client')->findAll();
        }
        else {
            $client = $em->getRepository('AppBundle:Client')->findClient($search);
        }

        return $this->render('Client/index.html.twig', array(
            'clients' => $client,
        ));
    }

    /**
     * Creates a new client entity.
     *
     * @Route("/new", name="fiche_client_new")
     * @Method({"GET" , "POST"})
     */

    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('AppBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);  
            $em->flush();

            return $this->redirectToRoute('fiche_client_show', array('id' => $client->getId()));
        }

        return $this->render('Client/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     * @Route("/{id}", name="fiche_client_show")
     * @Method("GET")
     */
    public function showAction(Client $client, Request $request)
    {
        $deleteForm = $this->createDeleteForm($client);
            $em = $this->getDoctrine()->getManager();
            $travail = $em->getRepository('AppBundle:Travail')->findAll();

        return $this->render('Client/show.html.twig', array(
            'client' => $client,
            'travail' => $travail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     * @Route("/{id}/edit", name="fiche_client_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('AppBundle\Form\ClientType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_client_edit', array('id' => $client->getId()));
        }

        return $this->render('Client/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     * @Route("/{id}", name="fiche_client_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('fiche_client_index');
    }

    /**
     * Creates a form to delete a client entity.
     *
     * @param Client $client The client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche_client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
