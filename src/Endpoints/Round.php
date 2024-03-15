<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Round extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/rounds';

        return $this->fetch($url);
    }

    public function getById(int $roundId): stdClass
    {
        $url = "football/rounds/{$roundId}";

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/rounds/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/rounds/search/{$search}";

        return $this->fetch($url);
    }
}
