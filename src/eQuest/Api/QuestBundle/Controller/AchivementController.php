<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eQuest\Api\QuestBundle\Entity\Achivement;
use eQuest\Api\QuestBundle\Form\AchivementType;

/**
 * Achivement controller.
 *
 */
class AchivementController extends Controller
{

    /**
     * Lists all Achivement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('eQuestApiQuestBundle:Achivement')->findAll();

        return $this->render('eQuestApiQuestBundle:Achivement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Achivement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Achivement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_achivement__show', array('id' => $entity->getId())));
        }

        return $this->render('eQuestApiQuestBundle:Achivement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Achivement entity.
     *
     * @param Achivement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Achivement $entity)
    {
        $form = $this->createForm(new AchivementType(), $entity, array(
            'action' => $this->generateUrl('admin_achivement__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Achivement entity.
     *
     */
    public function newAction()
    {
        $entity = new Achivement();
        $form   = $this->createCreateForm($entity);

        return $this->render('eQuestApiQuestBundle:Achivement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Achivement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Achivement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achivement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Achivement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Achivement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Achivement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achivement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('eQuestApiQuestBundle:Achivement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Achivement entity.
    *
    * @param Achivement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Achivement $entity)
    {
        $form = $this->createForm(new AchivementType(), $entity, array(
            'action' => $this->generateUrl('admin_achivement__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Achivement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('eQuestApiQuestBundle:Achivement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Achivement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_achivement__edit', array('id' => $id)));
        }

        return $this->render('eQuestApiQuestBundle:Achivement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Achivement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('eQuestApiQuestBundle:Achivement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Achivement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_achivement_'));
    }

    /**
     * Creates a form to delete a Achivement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_achivement__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
