<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Season extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/seasons';

        return $this->fetch($url);
    }

    public function getById(int $seasonId): stdClass
    {
        $url = "football/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function getByTeamId(int $teamId): stdClass
    {
        $url = "football/seasons/teams/{$teamId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/seasons/search/{$search}";

        return $this->fetch($url);
    }
}
