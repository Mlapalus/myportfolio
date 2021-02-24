<?php

namespace App\Tests\IntegrationTests;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CurriculumTest extends IntegrationTestCase
{
    public function testSuccessful()
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, "/");
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
