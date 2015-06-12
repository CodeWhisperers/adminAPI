<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('eQuestApiQuestBundle:Default:index.html.twig', array('name' => $name));
    }
}
