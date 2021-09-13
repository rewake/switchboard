<?php

namespace Rewake\Switchboard;

use Illuminate\Support\Collection;

abstract class AbstractConnector
{
    /** @var Collection */
    public $collection;

    public function collect(array $data): Collection
    {
        return $this->collection = collect($data);
    }
}
