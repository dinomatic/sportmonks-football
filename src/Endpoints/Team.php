<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Team extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/teams';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/teams/{$id}";

        return $this->fetch($url);
    }

    public function getByCountryId(int $countryId): stdClass
    {
        $url = "football/teams/countries/{$countryId}";

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/teams/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/teams/search/{$search}";

        return $this->fetch($url);
    }
}
