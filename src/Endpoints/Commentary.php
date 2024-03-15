<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Commentary extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/commentaries';

        return $this->fetch($url);
    }

    public function getByFixtureId(int $fixtureId): stdClass
    {
        $url = "football/commentaries/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }
}
