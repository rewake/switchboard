<?php

namespace Rewake\Switchboard;

class Switchboard
{
    /**
     * @var ConnectorInterface|null
     */
    public $source = null;

    /**
     * @param ConnectorInterface|string $connector
     * @return self
     */
    public static function connect($connector): self
    {
        // TODO: if possible, determine if string "can" be a class
        if (is_string($connector)) {
            $connector = new $connector();
        }

        // TODO: check ramifications of adding assertion here
        assert($connector instanceof ConnectorInterface);

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
