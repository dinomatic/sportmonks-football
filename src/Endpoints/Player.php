<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Player extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/players';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/players/{$id}";

        return $this->fetch($url);
    }

    public function getByCountryId(int $countryId): stdClass
    {
        $url = "football/players/countries/{$countryId}";

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/players/latest';

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/players/search/{$search}";

        return $this->fetch($url);
    }
}
