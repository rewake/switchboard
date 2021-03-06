<?php

namespace Rewake\Switchboard\Traits;

use GuzzleHttp\Client;

trait GuzzleTrait
{
    /** @var Client $client */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }
}
