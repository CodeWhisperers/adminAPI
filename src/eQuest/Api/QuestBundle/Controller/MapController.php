<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eQuest\Api\QuestBundle\Entity\Map;
use eQuest\Api\QuestBundle\Form\MapType;

/**
 * Map controller.
 *
 */
class MapController extends Controller
{

    /**
     * Lists all Map entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('eQuestApiQuestBundle:Map')->findAll();

        return $this->render('eQuestApiQuestBundle:Map:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Map entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Map();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_map__show', array('id' => $entity->getId())));
        }

        return $this->render('eQuestApiQuestBundle:Map:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Map entity.
     *
     * @param Map $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Map $entity)
    {
        $form = $this->createForm(new MapType(), $entity, array(
            'action' => $this->generateUrl('admin_map__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Map entity.
     *
     */
    public function newAction()
    {
        $entity = new Map();
        $form   = $this->createCreateForm($entity);

        return $this->render('eQuestApiQuestBundle:Map:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Map entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Map:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Map entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Map:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Map entity.
    *
    * @param Map $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Map $entity)
    {
        $form = $this->createForm(new MapType(), $entity, array(
            'action' => $this->generateUrl('admin_map__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Map entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_map__edit', array('id' => $id)));
        }

        return $this->render('eQuestApiQuestBundle:Map:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Map entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('eQuestApiQuestBundle:Map')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Map entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_map_'));
    }

    /**
     * Creates a form to delete a Map entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_map__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
