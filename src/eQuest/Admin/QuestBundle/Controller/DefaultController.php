<?php

namespace eQuest\Admin\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('eQuestAdminAcmeQuestBundle:Default:index.html.twig', array('name' => $name));
    }
}
