<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Country extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'core/countries';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "core/countries/{$id}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "core/countries/search/{$search}";

        return $this->fetch($url);
    }
}
