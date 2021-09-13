<?php

namespace Rewake\Switchboard;

class Switchboard
{
    /**
     * @var ConnectorInterface
     */
    public $source;

    /**
     * @param $connector
     * @return self
     */
    public static function connect($connector): self
    {
        if (is_string($connector)) {
            $connector = new $connector();
        }

        return (new self())->setSource($connector);
    }

    /**
     * @param ConnectorInterface $connector
     * @return self
     */
    public function setSource(ConnectorInterface $connector): self
    {
        $this->source = $connector;
        return $this;
    }
}
