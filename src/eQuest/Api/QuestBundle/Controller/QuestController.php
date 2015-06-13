<?php

namespace eQuest\Api\QuestBundle\Controller;

use eQuest\Api\QuestBundle\Entity\Quest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class QuestController extends Controller
{
    public function getQuestAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('eQuestApiQuestBundle:Quest');
        $quest = $repository->find($id);
        var_dump($quest);
        $response = new JsonResponse();
        $response->setData($quest);
        return $response;
    }

    public function getQuestListAction()
    {
        $repository = $this->getDoctrine()->getRepository('eQuestApiQuestBundle:Quest');
        $quests = $repository->findAll();
        //toate questurile
        return JsonResponse($quests);
    }

    public function setActiveQuestAction($user_id,$quest_id){


    }



}
