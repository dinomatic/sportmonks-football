<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Referee extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/referees';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/referees/{$id}";

        return $this->fetch($url);
    }

    public function getByCountryId(int $countryId): stdClass
    {
        $url = "football/referees/countries/{$countryId}";

        return $this->fetch($url);
    }

    public function getBySeasonId(int $seasonId): stdClass
    {
        $url = "football/referees/seasons/{$seasonId}";

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/referees/search/{$search}";

        return $this->fetch($url);
    }
}
