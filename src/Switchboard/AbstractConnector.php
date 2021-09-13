<?php

namespace Rewake\Switchboard;

use Illuminate\Support\Collection;

abstract class AbstractConnector
{
    /** @var Collection|null */
    public $collection = null;

    /**
     * @param array $data
     * @return Collection
     */
    public function collect(array $data): Collection
    {
        return $this->collection = collect($data);
    }
}
