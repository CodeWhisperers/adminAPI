<?php

namespace eQuest\Api\QuestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuestControllerTest extends WebTestCase
{
    public function testGetquest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/quest/{id}');
    }

    public function testGetquestlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/list-quests/');
    }

}
