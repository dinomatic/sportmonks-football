<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class TvStation extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/tv-stations';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/tv-stations/{$id}";

        return $this->fetch($url);
    }

    public function getByFixtureId(int $fixtureId): stdClass
    {
        $url = "football/tv-stations/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }
}
