<?php

namespace App\Tests\Functionnals;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PagesControllerTest extends WebTestCase
{
    private $client;

    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function urlProvider()
    {
        yield ['/'];
        yield ['/cv'];
        yield ['/portfolio'];
    }

    /**
     * @dataProvider urlProvider
     */
    public function test_if_pages_access_is_successful($url)
    {
        $this->client->request('GET', $url);
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }


}