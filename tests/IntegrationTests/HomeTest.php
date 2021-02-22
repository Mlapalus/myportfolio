<?php


namespace App\Tests\IntegrationTests;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeTest extends IntegrationTestCase
{
    public function testSuccessful()
    {
        $client = static::createClient();
        $crawler = $client->request(Request::METHOD_GET,"/");
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

    }
}