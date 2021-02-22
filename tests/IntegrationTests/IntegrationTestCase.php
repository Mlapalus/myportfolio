<?php


namespace App\Tests\IntegrationTests;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class IntegrationTestCase
 * @package App\Tests\IntegrationTests
 */
class IntegrationTestCase extends WebTestCase
{
    /**
     * @inheritDoc
     */
    protected static function createClient(array $options = [], array $server = [])
    {
        return parent::createClient(array_merge($options, ["environment" => "integration"]), $server);
    }
}