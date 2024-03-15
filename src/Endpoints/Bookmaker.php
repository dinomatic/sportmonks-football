<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Bookmaker extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'odds/bookmakers';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "odds/bookmakers/{$id}";

        return $this->fetch($url);
    }

    public function getByFixtureId(int $fixtureId): stdClass
    {
        $url = "odds/bookmakers/fixtures/{$fixtureId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "odds/bookmakers/search/{$search}";

        return $this->fetch($url);
    }
}
