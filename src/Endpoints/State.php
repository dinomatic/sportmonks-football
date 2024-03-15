<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class State extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/states';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/states/{$id}";

        return $this->fetch($url);
    }
}
