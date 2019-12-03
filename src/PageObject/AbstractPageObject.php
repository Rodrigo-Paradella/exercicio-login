<?php


namespace Forseti\Bot\Login\PageObject;

use GuzzleHttp\Client;

abstract class AbstractPageObject
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['cookies' => true]);
    }
}
