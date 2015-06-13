<?php

namespace eQuest\Api\QuestBundle\Controller;

use eQuest\Api\QuestBundle\Entity\Quest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;


class ApiQuestController extends Controller
{
    public function getQuestAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('eQuestApiQuestBundle:Quest');
        $quest = $repository->find($id);
        $serializer = new Serializer(
            array(new GetSetMethodNormalizer()),
            array('json' => new JsonEncoder())
        );
        $json = $serializer->serialize($quest, 'json');
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }

    public function getQuestListAction()
    {
        $repository = $this->getDoctrine()->getRepository('eQuestApiQuestBundle:Quest');
        $quests = $repository->findAll();
        $serializer = new Serializer(
            array(new GetSetMethodNormalizer()),
            array('json' => new JsonEncoder())
        );
        $json = $serializer->serialize($quests, 'json');
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($json);

        return $response;
    }

    public function setActiveQuestAction($user_id,$quest_id){


    }

    public function getActiveQuestAction($user_id){


    }


    public function completeQuestAction($user_id){

    }



}
