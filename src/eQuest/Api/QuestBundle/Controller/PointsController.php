<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eQuest\Api\QuestBundle\Entity\Points;
use eQuest\Api\QuestBundle\Form\PointsType;

/**
 * Points controller.
 *
 */
class PointsController extends Controller
{

    /**
     * Lists all Points entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('eQuestApiQuestBundle:Points')->findAll();

        return $this->render('eQuestApiQuestBundle:Points:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Points entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Points();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_points__show', array('id' => $entity->getId())));
        }

        return $this->render('eQuestApiQuestBundle:Points:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Points entity.
     *
     * @param Points $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Points $entity)
    {
        $form = $this->createForm(new PointsType(), $entity, array(
            'action' => $this->generateUrl('admin_points__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Points entity.
     *
     */
    public function newAction()
    {
        $entity = new Points();
        $form   = $this->createCreateForm($entity);

        return $this->render('eQuestApiQuestBundle:Points:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Points entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Points:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Points entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Points:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Points entity.
    *
    * @param Points $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Points $entity)
    {
        $form = $this->createForm(new PointsType(), $entity, array(
            'action' => $this->generateUrl('admin_points__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Points entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Points')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Points entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_points__edit', array('id' => $id)));
        }

        return $this->render('eQuestApiQuestBundle:Points:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Points entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('eQuestApiQuestBundle:Points')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Points entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_points_'));
    }

    /**
     * Creates a form to delete a Points entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_points__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
