<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eQuest\Api\QuestBundle\Entity\Quest;
use eQuest\Api\QuestBundle\Form\QuestType;

/**
 * Quest controller.
 *
 */
class QuestController extends Controller
{

    /**
     * Lists all Quest entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('eQuestApiQuestBundle:Quest')->findAll();

        return $this->render('eQuestApiQuestBundle:Quest:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Quest entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Quest();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_quest__show', array('id' => $entity->getId())));
        }

        return $this->render('eQuestApiQuestBundle:Quest:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Quest entity.
     *
     * @param Quest $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Quest $entity)
    {
        $form = $this->createForm(new QuestType(), $entity, array(
            'action' => $this->generateUrl('admin_quest__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Quest entity.
     *
     */
    public function newAction()
    {
        $entity = new Quest();
        $form   = $this->createCreateForm($entity);

        return $this->render('eQuestApiQuestBundle:Quest:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Quest entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Quest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Quest:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Quest entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Quest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quest entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Quest:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Quest entity.
    *
    * @param Quest $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Quest $entity)
    {
        $form = $this->createForm(new QuestType(), $entity, array(
            'action' => $this->generateUrl('admin_quest__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Quest entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Quest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_quest__edit', array('id' => $id)));
        }

        return $this->render('eQuestApiQuestBundle:Quest:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Quest entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('eQuestApiQuestBundle:Quest')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Quest entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_quest_'));
    }

    /**
     * Creates a form to delete a Quest entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_quest__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
