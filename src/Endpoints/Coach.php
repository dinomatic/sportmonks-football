<?php

namespace Sportmonks\Football\Endpoints;

use Sportmonks\Football\FootballApiClient;
use stdClass;

class Coach extends FootballApiClient
{
    public function getAll(): stdClass
    {
        $url = 'football/coaches';

        return $this->fetch($url);
    }

    public function getById(int $id): stdClass
    {
        $url = "football/coaches/{$id}";

        return $this->fetch($url);
    }

    public function getByCountryId(int $countryId): stdClass
    {
        $url = "football/coaches/countries/{$countryId}";

        return $this->fetch($url);
    }

    public function getLatest(): stdClass
    {
        $url = 'football/coaches/latest';

        return $this->fetch($url);
    }

    public function search(string $search): stdClass
    {
        $url = "football/coaches/search/{$search}";

        return $this->fetch($url);
    }
}
