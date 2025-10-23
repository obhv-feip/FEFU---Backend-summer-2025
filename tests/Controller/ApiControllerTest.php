<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetUsersReturnsCorrectNumberOfUsers(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/users');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();
        $data = json_decode($responseContent, true);

        $this->assertCount(3, $data['data']);
        $this->assertEquals(3, $data['total']);
    }
}

