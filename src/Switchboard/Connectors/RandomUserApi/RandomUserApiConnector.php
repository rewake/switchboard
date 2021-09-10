<?php

namespace Rewake\Switchboard\Connectors\RandomUserApi;

use Illuminate\Support\Collection;
use Rewake\Switchboard\AbstractConnector;
use Rewake\Switchboard\ConnectorInterface;
use Rewake\Switchboard\Traits\GuzzleTrait;

class RandomUserApiConnector extends AbstractConnector implements ConnectorInterface
{
    use GuzzleTrait;

    public function load(): Collection
    {
        $result = $this->client->get('https://randomuser.me/api/?results=50')->getBody();
        return $this->collect(json_decode($result, true));
    }
}
