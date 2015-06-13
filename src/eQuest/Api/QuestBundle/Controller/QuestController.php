<?php

namespace eQuest\Api\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestController extends Controller
{
    public function getQuestAction($id)
    {
        return $this->render('eQuestApiQuestBundle:Quest:getQuest.html.twig', array(
                // ...
            ));    }

    public function getQuestListAction()
    {
        return $this->render('eQuestApiQuestBundle:Quest:getQuestList.html.twig', array(
                // ...
            ));    }

}
