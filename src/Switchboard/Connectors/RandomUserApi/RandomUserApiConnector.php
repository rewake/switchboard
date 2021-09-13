<?php

namespace Rewake\Switchboard\Connectors\RandomUserApi;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;
use Rewake\Switchboard\AbstractConnector;
use Rewake\Switchboard\ConnectorInterface;
use Rewake\Switchboard\Traits\GuzzleTrait;

class RandomUserApiConnector extends AbstractConnector implements ConnectorInterface
{
    use GuzzleTrait;

    /**
     * @throws GuzzleException
     */
    public function load(): Collection
    {
        /** @var string $result */
        $result = $this->client->get('https://randomuser.me/api/?results=50')->getBody();

        // TODO: array casting is to satisfy psalm, for now, but we "should" refactor later...
        // ...since this is just an example it's not a huge deal really
        return $this->collect(json_decode($result, true));
    }
}
