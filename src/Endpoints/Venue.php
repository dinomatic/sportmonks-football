<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Venue extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/venues';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/venues/{$id}";

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/venues/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/venues/search/{$search}";

        return $this->fetch($url);
    }
}
