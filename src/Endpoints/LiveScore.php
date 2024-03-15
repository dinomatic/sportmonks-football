<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class LiveScore extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/livescores';

        return $this->fetch($url);
    }

    public function getInPlay(): stdClass
    {
        $url = 'football/livescores/inplay';

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/livescores/latest';

        return $this->fetch($url);
    }
}
