<?php

namespace Guzzle;


use GuzzleHttp\Client;

class Guzzle implements GuzzleInterface
{
    protected $client;

    public function __construct(array $config = [])
    {
        $this->client = new Client($config);
    }

    public function getReturnCode($uri)
    {
        $response = $this->client->get($uri);

        return $response->getStatusCode();
    }

    public function getReturnContent($uri)
    {
        $response = $this->client->get($uri);

        return $response->getBody()->getContents();

    }
}
