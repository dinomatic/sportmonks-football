<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Type extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'core/types';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "core/types/{$id}";

        return $this->fetch($url);
    }

    // FIX. check the docs.
    public function getByEntityId(int $entityId): stdClass
    {
        $url = "core/types/entities/{$entityId}";

        return $this->fetch($url);
    }
}
